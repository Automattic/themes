<?php

namespace VariableAnalysis\Sniffs\CodeAnalysis;

use VariableAnalysis\Lib\ScopeInfo;
use VariableAnalysis\Lib\VariableInfo;
use VariableAnalysis\Lib\Constants;
use VariableAnalysis\Lib\Helpers;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Util\Tokens;

class VariableAnalysisSniff implements Sniff {
  /**
   * The current phpcsFile being checked.
   *
   * @var File|null phpcsFile
   */
  protected $currentFile = null;

  /**
   * A list of scopes encountered so far and the variables within them.
   *
   * @var ScopeInfo[]
   */
  private $scopes = [];

  /**
   * A list of custom functions which pass in variables to be initialized by
   * reference (eg `preg_match()`) and therefore should not require those
   * variables to be defined ahead of time. The list is space separated and
   * each entry is of the form `functionName:1,2`. The function name comes
   * first followed by a colon and a comma-separated list of argument numbers
   * (starting from 1) which should be considered variable definitions. The
   * special value `...` in the arguments list will cause all arguments after
   * the last number to be considered variable definitions.
   *
   * @var string|null
   */
  public $sitePassByRefFunctions = null;

  /**
   * If set, allows common WordPress pass-by-reference functions in addition to
   * the standard PHP ones.
   *
   * @var bool
   */
  public $allowWordPressPassByRefFunctions = false;

  /**
   *  Allow exceptions in a catch block to be unused without warning.
   *
   *  @var bool
   */
  public $allowUnusedCaughtExceptions = true;

  /**
   *  Allow function parameters to be unused without provoking unused-var warning.
   *  Set generic.codeanalysis.variableanalysis.allowUnusedFunctionParameters to a true value.
   *
   *  @var bool
   */
  public $allowUnusedFunctionParameters = false;

  /**
   *  A space-separated list of names of placeholder variables that you want to
   *  ignore from unused variable warnings. For example, to ignore the variables
   *  `$junk` and `$unused`, this could be set to `'junk unused'`.
   *
   *  @var string|null
   */
  public $validUnusedVariableNames = null;

  /**
   *  A PHP regexp string for variables that you want to ignore from unused
   *  variable warnings. For example, to ignore the variables `$_junk` and
   *  `$_unused`, this could be set to `'/^_/'`.
   *
   *  @var string|null
   */
  public $ignoreUnusedRegexp = null;

  /**
   *  A space-separated list of names of placeholder variables that you want to
   *  ignore from undefined variable warnings. For example, to ignore the variables
   *  `$post` and `$undefined`, this could be set to `'post undefined'`.
   *
   *  @var string|null
   */
  public $validUndefinedVariableNames = null;

  /**
   * Allows unused arguments in a function definition if they are
   * followed by an argument which is used.
   *
   *  @var bool
   */
  public $allowUnusedParametersBeforeUsed = true;

  /**
   * If set to true, unused values from the `key => value` syntax
   * in a `foreach` loop will never be marked as unused.
   *
   *  @var bool
   */
  public $allowUnusedForeachVariables = true;

  /**
   * @return (int|string)[]
   */
  public function register() {
    return [
      T_VARIABLE,
      T_DOUBLE_QUOTED_STRING,
      T_HEREDOC,
      T_CLOSE_CURLY_BRACKET,
      T_STRING,
    ];
  }

  /**
   * @param string $functionName
   *
   * @return string[]
   */
  private function getPassByReferenceFunction($functionName) {
    $passByRefFunctions = Constants::getPassByReferenceFunctions();
    if (!empty($this->sitePassByRefFunctions)) {
      $lines = Helpers::splitStringToArray('/\s+/', trim($this->sitePassByRefFunctions));
      foreach ($lines as $line) {
        list ($function, $args) = explode(':', $line);
        $passByRefFunctions[$function] = explode(',', $args);
      }
    }
    if ($this->allowWordPressPassByRefFunctions) {
      $passByRefFunctions = array_merge($passByRefFunctions, Constants::getWordPressPassByReferenceFunctions());
    }
    return isset($passByRefFunctions[$functionName]) ? $passByRefFunctions[$functionName] : [];
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return void
   */
  public function process(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();
    $token  = $tokens[$stackPtr];

    if ($this->currentFile !== $phpcsFile) {
      $this->currentFile = $phpcsFile;
    }

    if ($token['code'] === T_VARIABLE) {
      $this->processVariable($phpcsFile, $stackPtr);
      return;
    }
    if (($token['code'] === T_DOUBLE_QUOTED_STRING) || ($token['code'] === T_HEREDOC)) {
      $this->processVariableInString($phpcsFile, $stackPtr);
      return;
    }
    if (($token['code'] === T_STRING) && ($token['content'] === 'compact')) {
      $this->processCompact($phpcsFile, $stackPtr);
      return;
    }
    if ($this->isGetDefinedVars($phpcsFile, $stackPtr)) {
      Helpers::debug('get_defined_vars is being called');
      $this->markAllVariablesRead($phpcsFile, $stackPtr);
      return;
    }
    if (($token['code'] === T_CLOSE_CURLY_BRACKET) && isset($token['scope_condition'])) {
      $this->processScopeClose($phpcsFile, $token['scope_condition']);
      return;
    }
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return bool
   */
  protected function isGetDefinedVars(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();
    $token = $tokens[$stackPtr];
    if (! $token || $token['content'] !== 'get_defined_vars') {
      return false;
    }
    // Make sure this is a function call
    $parenPointer = $phpcsFile->findNext(Tokens::$emptyTokens, ($stackPtr + 1), null, true);
    if (! $parenPointer || $tokens[$parenPointer]['code'] !== T_OPEN_PARENTHESIS) {
      return false;
    }
    return true;
  }

  /**
   * @param int $currScope
   *
   * @return string
   */
  protected function getScopeKey($currScope) {
    return ($this->currentFile ? $this->currentFile->getFilename() : 'unknown file') . ':' . $currScope;
  }

  /**
   * @param int $currScope
   *
   * @return ScopeInfo|null
   */
  protected function getScopeInfo($currScope) {
    $scopeKey = $this->getScopeKey($currScope);
    return isset($this->scopes[$scopeKey]) ? $this->scopes[$scopeKey] : null;
  }

  /**
   * @param int $currScope
   *
   * @return ScopeInfo
   */
  protected function getOrCreateScopeInfo($currScope) {
    $scopeKey = $this->getScopeKey($currScope);
    if (!isset($this->scopes[$scopeKey])) {
      $this->scopes[$scopeKey] = new ScopeInfo($currScope);
    }
    return $this->scopes[$scopeKey];
  }

  /**
   * @param string $varName
   * @param int $currScope
   *
   * @return VariableInfo|null
   */
  protected function getVariableInfo($varName, $currScope) {
    $scopeInfo = $this->getScopeInfo($currScope);
    return ( $scopeInfo && isset($scopeInfo->variables[$varName]) ) ? $scopeInfo->variables[$varName] : null;
  }

  /**
   * @param string $varName
   * @param int $currScope
   *
   * @return VariableInfo
   */
  protected function getOrCreateVariableInfo($varName, $currScope) {
    $scopeInfo = $this->getOrCreateScopeInfo($currScope);
    if (!isset($scopeInfo->variables[$varName])) {
      $scopeInfo->variables[$varName] = new VariableInfo($varName);
      $validUnusedVariableNames = (empty($this->validUnusedVariableNames))
        ? []
        : Helpers::splitStringToArray('/\s+/', trim($this->validUnusedVariableNames));
      $validUndefinedVariableNames = (empty($this->validUndefinedVariableNames))
        ? []
        : Helpers::splitStringToArray('/\s+/', trim($this->validUndefinedVariableNames));
      if (in_array($varName, $validUnusedVariableNames)) {
        $scopeInfo->variables[$varName]->ignoreUnused = true;
      }
      if (isset($this->ignoreUnusedRegexp) && preg_match($this->ignoreUnusedRegexp, $varName) === 1) {
        $scopeInfo->variables[$varName]->ignoreUnused = true;
      }
      if (in_array($varName, $validUndefinedVariableNames)) {
        $scopeInfo->variables[$varName]->ignoreUndefined = true;
      }
    }
    return $scopeInfo->variables[$varName];
  }

  /**
   * @param VariableInfo $varInfo
   * @param ScopeInfo $scopeInfo
   *
   * @return bool
   */
  protected function areFollowingArgumentsUsed($varInfo, $scopeInfo) {
    $foundVarPosition = false;
    foreach ($scopeInfo->variables as $variable) {
      if ($variable === $varInfo) {
        $foundVarPosition = true;
        continue;
      }
      if (! $foundVarPosition) {
        continue;
      }
      if ($variable->scopeType !== 'param') {
        continue;
      }
      if ($variable->firstRead) {
        return true;
      }
    }
    return false;
  }

  /**
   * @param string $varName
   * @param int $stackPtr
   * @param int $currScope
   *
   * @return void
   */
  protected function markVariableAssignment($varName, $stackPtr, $currScope) {
    $varInfo = $this->getOrCreateVariableInfo($varName, $currScope);
    if (!isset($varInfo->scopeType)) {
      $varInfo->scopeType = 'local';
    }
    if (isset($varInfo->firstInitialized) && ($varInfo->firstInitialized <= $stackPtr)) {
      return;
    }
    $varInfo->firstInitialized = $stackPtr;
  }

  /**
   * @param string $varName
   * @param string $scopeType
   * @param ?string $typeHint
   * @param int $stackPtr
   * @param int $currScope
   * @param ?bool $permitMatchingRedeclaration
   *
   * @return void
   */
  protected function markVariableDeclaration(
    $varName,
    $scopeType,
    $typeHint,
    $stackPtr,
    $currScope,
    $permitMatchingRedeclaration = false
  ) {
    $varInfo = $this->getOrCreateVariableInfo($varName, $currScope);
    if (isset($varInfo->scopeType)) {
      if (($permitMatchingRedeclaration === false) || ($varInfo->scopeType !== $scopeType)) {
        //  Issue redeclaration/reuse warning
        //  Note: we check off scopeType not firstDeclared, this is so that
        //    we catch declarations that come after implicit declarations like
        //    use of a variable as a local.
        $this->addWarning(
          "Redeclaration of %s %s as %s.",
          $stackPtr,
          'VariableRedeclaration',
          [
            VariableInfo::$scopeTypeDescriptions[$varInfo->scopeType],
            "\${$varName}",
            VariableInfo::$scopeTypeDescriptions[$scopeType],
          ]
        );
      }
    }
    $varInfo->scopeType = $scopeType;
    if (isset($typeHint)) {
      $varInfo->typeHint = $typeHint;
    }
    if (isset($varInfo->firstDeclared) && ($varInfo->firstDeclared <= $stackPtr)) {
      return;
    }
    $varInfo->firstDeclared = $stackPtr;
  }

  /**
   * @param string $message
   * @param int $stackPtr
   * @param string $code
   * @param string[] $data
   *
   * @return void
   */
  protected function addWarning($message, $stackPtr, $code, $data) {
    if (! $this->currentFile) {
      throw new \Exception('Cannot add warning; current file is not set.');
    }
    $this->currentFile->addWarning(
      $message,
      $stackPtr,
      $code,
      $data
    );
  }

  /**
   * @param string $varName
   * @param int $stackPtr
   * @param int $currScope
   *
   * @return void
   */
  protected function markVariableRead($varName, $stackPtr, $currScope) {
    $varInfo = $this->getOrCreateVariableInfo($varName, $currScope);
    if (isset($varInfo->firstRead) && ($varInfo->firstRead <= $stackPtr)) {
      return;
    }
    $varInfo->firstRead = $stackPtr;
  }

  /**
   * @param string $varName
   * @param int $stackPtr
   * @param int $currScope
   *
   * @return bool
   */
  protected function isVariableUndefined($varName, $stackPtr, $currScope) {
    $varInfo = $this->getOrCreateVariableInfo($varName, $currScope);
    if ($varInfo->ignoreUndefined) {
      return false;
    }
    if (isset($varInfo->firstDeclared) && $varInfo->firstDeclared <= $stackPtr) {
      return false;
    }
    if (isset($varInfo->firstInitialized) && $varInfo->firstInitialized <= $stackPtr) {
      return false;
    }
    return true;
  }

  /**
   * @param File $phpcsFile
   * @param string $varName
   * @param int $stackPtr
   * @param int $currScope
   *
   * @return void
   */
  protected function markVariableReadAndWarnIfUndefined($phpcsFile, $varName, $stackPtr, $currScope) {
    $this->markVariableRead($varName, $stackPtr, $currScope);
    if ($this->isVariableUndefined($varName, $stackPtr, $currScope) === true) {
      Helpers::debug("variable $varName looks undefined");
      $phpcsFile->addWarning(
        "Variable %s is undefined.",
        $stackPtr,
        'UndefinedVariable',
        ["\${$varName}"]
      );
    }
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return void
   */
  protected function markAllVariablesRead(File $phpcsFile, $stackPtr) {
    $currScope = Helpers::findVariableScope($phpcsFile, $stackPtr);
    if ($currScope === null) {
      return;
    }
    $scopeInfo = $this->getOrCreateScopeInfo($currScope);
    $count = count($scopeInfo->variables);
    Helpers::debug("marking all $count variables in scope as read");
    foreach ($scopeInfo->variables as $varInfo) {
      $this->markVariableRead($varInfo->name, $stackPtr, $scopeInfo->owner);
    }
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForFunctionPrototype(File $phpcsFile, $stackPtr, $varName, $currScope) {
    $tokens = $phpcsFile->getTokens();

    // Are we a function or closure parameter?
    // It would be nice to get the list of function parameters from watching for
    // T_FUNCTION, but AbstractVariableSniff and AbstractScopeSniff define everything
    // we need to do that as private or final, so we have to do it this hackish way.
    $openPtr = Helpers::findContainingOpeningBracket($phpcsFile, $stackPtr);
    if (! is_int($openPtr)) {
      return false;
    }

    $functionPtr = Helpers::findPreviousFunctionPtr($phpcsFile, $openPtr);
    if (// phpcs:ignore PSR2.ControlStructures.ControlStructureSpacing.SpacingAfterOpenBrace
      (is_int($functionPtr))
      && (($tokens[$functionPtr]['code'] === T_FUNCTION)
      || ($tokens[$functionPtr]['code'] === T_CLOSURE))
    ) {
      $this->markVariableDeclaration($varName, 'param', null, $stackPtr, $functionPtr);
      // Are we pass-by-reference?
      $referencePtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $stackPtr - 1, null, true, null, true);
      if (($referencePtr !== false) && ($tokens[$referencePtr]['code'] === T_BITWISE_AND)) {
        $varInfo = $this->getOrCreateVariableInfo($varName, $functionPtr);
        $varInfo->passByReference = true;
      }
      //  Are we optional with a default?
      if (Helpers::getNextAssignPointer($phpcsFile, $stackPtr) !== null) {
        $this->markVariableAssignment($varName, $stackPtr, $functionPtr);
      }
      return true;
    }

    // Is it a use keyword?  Use is both a read and a define, fun!
    if (($functionPtr !== false) && ($tokens[$functionPtr]['code'] === T_USE)) {
      $this->markVariableRead($varName, $stackPtr, $currScope);
      if ($this->isVariableUndefined($varName, $stackPtr, $currScope) === true) {
        // We haven't been defined by this point.
        Helpers::debug("variable $varName in function prototype looks undefined");
        $phpcsFile->addWarning("Variable %s is undefined.", $stackPtr, 'UndefinedVariable', ["\${$varName}"]);
        return true;
      }
      // $functionPtr is at the use, we need the function keyword for start of scope.
      $functionPtr = $phpcsFile->findPrevious([T_CLOSURE], $functionPtr - 1, $currScope + 1, false, null, true);
      if (! is_bool($functionPtr)) {
        $this->markVariableDeclaration($varName, 'bound', null, $stackPtr, $functionPtr);
        $this->markVariableAssignment($varName, $stackPtr, $functionPtr);

        // Are we pass-by-reference?
        $referencePtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $stackPtr - 1, null, true, null, true);
        if ((! is_bool($referencePtr)) && ($tokens[$referencePtr]['code'] === T_BITWISE_AND)) {
          $varInfo = $this->getOrCreateVariableInfo($varName, $functionPtr);
          $varInfo->passByReference = true;
        }

        return true;
      }
    }
    return false;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return bool
   */
  protected function checkForClassProperty(File $phpcsFile, $stackPtr) {
    $propertyDeclarationKeywords = [
      T_PUBLIC,
      T_PRIVATE,
      T_PROTECTED,
      T_VAR,
    ];
    $stopAtPtr = $stackPtr - 2;
    $visibilityPtr = $phpcsFile->findPrevious($propertyDeclarationKeywords, $stackPtr - 1, $stopAtPtr > 0 ? $stopAtPtr : 0);
    if ($visibilityPtr) {
      return true;
    }
    $staticPtr = $phpcsFile->findPrevious(T_STATIC, $stackPtr - 1, $stopAtPtr > 0 ? $stopAtPtr : 0);
    if (! $staticPtr) {
      return false;
    }
    $stopAtPtr = $staticPtr - 2;
    $visibilityPtr = $phpcsFile->findPrevious($propertyDeclarationKeywords, $staticPtr - 1, $stopAtPtr > 0 ? $stopAtPtr : 0);
    if ($visibilityPtr) {
      return true;
    }
    // it's legal to use `static` to define properties as well as to
    // define variables, so make sure we are not in a function before
    // assuming it's a property.
    $tokens = $phpcsFile->getTokens();
    $token  = $tokens[$stackPtr];
    if ($token && !empty($token['conditions']) && !Helpers::areConditionsWithinFunctionBeforeClass($token['conditions'])) {
      return Helpers::areAnyConditionsAClass($token['conditions']);
    }
    return false;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForCatchBlock(File $phpcsFile, $stackPtr, $varName, $currScope) {
    $tokens = $phpcsFile->getTokens();

    // Are we a catch block parameter?
    $openPtr = Helpers::findContainingOpeningBracket($phpcsFile, $stackPtr);
    if ($openPtr === null) {
      return false;
    }

    $catchPtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $openPtr - 1, null, true, null, true);
    if (($catchPtr !== false) && ($tokens[$catchPtr]['code'] === T_CATCH)) {
      // Scope of the exception var is actually the function, not just the catch block.
      $this->markVariableDeclaration($varName, 'local', null, $stackPtr, $currScope, true);
      $this->markVariableAssignment($varName, $stackPtr, $currScope);
      if ($this->allowUnusedCaughtExceptions) {
        $varInfo = $this->getOrCreateVariableInfo($varName, $currScope);
        $varInfo->ignoreUnused = true;
      }
      return true;
    }
    return false;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   *
   * @return bool
   */
  protected function checkForThisWithinClass(File $phpcsFile, $stackPtr, $varName) {
    $tokens = $phpcsFile->getTokens();
    $token  = $tokens[$stackPtr];

    // Are we $this within a class?
    if (($varName !== 'this') || empty($token['conditions'])) {
      return false;
    }

    $inFunction = false;
    foreach (array_reverse($token['conditions'], true) as $scopeCode) {
      //  $this within a closure is valid
      if ($scopeCode === T_CLOSURE && $inFunction === false) {
        return true;
      }
      if ($scopeCode === T_CLASS || $scopeCode === T_ANON_CLASS || $scopeCode === T_TRAIT) {
        return true;
      }

      // Handle nested function declarations.
      if ($scopeCode === T_FUNCTION) {
        if ($inFunction === true) {
            break;
        }

        $inFunction = true;
      }
    }

    return false;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   *
   * @return bool
   */
  protected function checkForSuperGlobal(File $phpcsFile, $stackPtr, $varName) {
    // Are we a superglobal variable?
    if (in_array($varName, [
      'GLOBALS',
      '_SERVER',
      '_GET',
      '_POST',
      '_FILES',
      '_COOKIE',
      '_SESSION',
      '_REQUEST',
      '_ENV',
      'argv',
      'argc',
    ])) {
      return true;
    }

    return false;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return bool
   */
  protected function checkForStaticMember(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    $doubleColonPtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $stackPtr - 1, null, true);
    if ($doubleColonPtr === false || $tokens[$doubleColonPtr]['code'] !== T_DOUBLE_COLON) {
      return false;
    }
    $classNamePtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $doubleColonPtr - 1, null, true);
    $staticReferences = [
      T_STRING,
      T_SELF,
      T_PARENT,
      T_STATIC,
      T_VARIABLE,
    ];
    if ($classNamePtr === false || ! in_array($tokens[$classNamePtr]['code'], $staticReferences, true)) {
      return false;
    }
    // "When calling static methods, the function call is stronger than the
    // static property operator" so look for a function call.
    $parenPointer = $phpcsFile->findNext(Tokens::$emptyTokens, ($stackPtr + 1), null, true);
    if ($parenPointer !== false && $tokens[$parenPointer]['code'] === T_OPEN_PARENTHESIS) {
      return false;
    }
    return true;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   *
   * @return bool
   */
  protected function checkForStaticOutsideClass(File $phpcsFile, $stackPtr, $varName) {
    // Are we refering to self:: outside a class?

    $tokens = $phpcsFile->getTokens();
    $token  = $tokens[$stackPtr];

    $doubleColonPtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $stackPtr - 1, null, true);
    if ($doubleColonPtr === false || $tokens[$doubleColonPtr]['code'] !== T_DOUBLE_COLON) {
      return false;
    }
    $classNamePtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $doubleColonPtr - 1, null, true);
    if ($classNamePtr === false) {
      return false;
    }
    $code = $tokens[$classNamePtr]['code'];
    $staticReferences = [
      T_SELF,
      T_STATIC,
    ];
    if (! in_array($code, $staticReferences, true)) {
      return false;
    }
    $errorClass = $code === T_SELF ? 'SelfOutsideClass' : 'StaticOutsideClass';
    $staticRefType = $code === T_SELF ? 'self::' : 'static::';
    if (!empty($token['conditions']) && Helpers::areAnyConditionsAClass($token['conditions'])) {
      return false;
    }
    $phpcsFile->addError(
      "Use of {$staticRefType}%s outside class definition.",
      $stackPtr,
      $errorClass,
      ["\${$varName}"]
    );
    return true;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForAssignment(File $phpcsFile, $stackPtr, $varName, $currScope) {
    // Is the next non-whitespace an assignment?
    $assignPtr = Helpers::getNextAssignPointer($phpcsFile, $stackPtr);
    if (! is_int($assignPtr)) {
      return false;
    }

    // Is this a variable variable? If so, it's not an assignment to the current variable.
    if ($this->checkForVariableVariable($phpcsFile, $stackPtr)) {
      Helpers::debug('found variable variable');
      return false;
    }

    // Plain ol' assignment. Simpl(ish).
    $writtenPtr = Helpers::findWhereAssignExecuted($phpcsFile, $assignPtr);
    $this->markVariableAssignment($varName, $writtenPtr, $currScope);

    // Are we are reference variable?
    $tokens = $tokens = $phpcsFile->getTokens();
    $referencePtr = $phpcsFile->findNext(Tokens::$emptyTokens, $assignPtr + 1, null, true, null, true);
    $varInfo = $this->getOrCreateVariableInfo($varName, $currScope);
    if ($referencePtr !== false && $tokens[$referencePtr]['code'] === T_BITWISE_AND) {
      $varInfo->isReference = true;
    } elseif ($varInfo->isReference) {
      // If this is an assigment to a reference variable then that variable is
      // used.
      $this->markVariableRead($varName, $stackPtr, $currScope);
    }

    return true;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return bool
   */
  protected function checkForVariableVariable(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    $prev = $phpcsFile->findPrevious(Tokens::$emptyTokens, ($stackPtr - 1), null, true);
    if ($prev === false) {
      return false;
    }
    if ($tokens[$prev]['code'] === T_DOLLAR) {
      return true;
    }
    if ($tokens[$prev]['code'] !== T_OPEN_CURLY_BRACKET) {
      return false;
    }

    $prevPrev = $phpcsFile->findPrevious(Tokens::$emptyTokens, ($prev - 1), null, true);
    if ($prevPrev !== false && $tokens[$prevPrev]['code'] === T_DOLLAR) {
      return true;
    }
    return false;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForListShorthandAssignment(File $phpcsFile, $stackPtr, $varName, $currScope) {
    // OK, are we within a [ ... ] construct?
    $openPtr = Helpers::findContainingOpeningSquareBracket($phpcsFile, $stackPtr);
    if (! is_int($openPtr)) {
      return false;
    }

    // OK, we're a [ ... ] construct... are we being assigned to?
    $closePtr = Helpers::findContainingClosingSquareBracket($phpcsFile, $stackPtr);
    if (! is_int($closePtr)) {
      return false;
    }
    $assignPtr = Helpers::getNextAssignPointer($phpcsFile, $closePtr);
    if (! is_int($assignPtr)) {
      return false;
    }

    // Yes, we're being assigned.
    $writtenPtr = Helpers::findWhereAssignExecuted($phpcsFile, $assignPtr);
    $this->markVariableAssignment($varName, $writtenPtr, $currScope);
    return true;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForListAssignment(File $phpcsFile, $stackPtr, $varName, $currScope) {
    $tokens = $phpcsFile->getTokens();

    // OK, are we within a list (...) construct?
    $openPtr = Helpers::findContainingOpeningBracket($phpcsFile, $stackPtr);
    if ($openPtr === null) {
      return false;
    }

    $prevPtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $openPtr - 1, null, true, null, true);
    if (($prevPtr === false) || ($tokens[$prevPtr]['code'] !== T_LIST)) {
      return false;
    }

    // OK, we're a list (...) construct... are we being assigned to?
    $closePtr = $tokens[$openPtr]['parenthesis_closer'];
    $assignPtr = Helpers::getNextAssignPointer($phpcsFile, $closePtr);
    if (! is_int($assignPtr)) {
      return false;
    }

    // Yes, we're being assigned.
    $writtenPtr = Helpers::findWhereAssignExecuted($phpcsFile, $assignPtr);
    $this->markVariableAssignment($varName, $writtenPtr, $currScope);
    return true;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForGlobalDeclaration(File $phpcsFile, $stackPtr, $varName, $currScope) {
    $tokens = $phpcsFile->getTokens();

    // Are we a global declaration?
    // Search backwards for first token that isn't whitespace/comment, comma or variable.
    $ignore             = Tokens::$emptyTokens;
    $ignore[T_VARIABLE] = T_VARIABLE;
    $ignore[T_COMMA]    = T_COMMA;

    $globalPtr = $phpcsFile->findPrevious($ignore, $stackPtr - 1, null, true, null, true);
    if (($globalPtr === false) || ($tokens[$globalPtr]['code'] !== T_GLOBAL)) {
      return false;
    }

    // It's a global declaration.
    $this->markVariableDeclaration($varName, 'global', null, $stackPtr, $currScope);
    return true;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForStaticDeclaration(File $phpcsFile, $stackPtr, $varName, $currScope) {
    $tokens = $phpcsFile->getTokens();

    // Are we a static declaration?
    // Static declarations are a bit more complicated than globals, since they
    // can contain assignments. The assignment is compile-time however so can
    // only be constant values, which makes life manageable.
    //
    // Just to complicate matters further, late static binding constants
    // take the form static::CONSTANT and are invalid within static variable
    // assignments, but we don't want to accidentally match their use of the
    // static keyword.
    //
    // Valid values are:
    //   number         T_MINUS T_LNUMBER T_DNUMBER
    //   string         T_CONSTANT_ENCAPSED_STRING
    //   heredoc        T_START_HEREDOC T_HEREDOC T_END_HEREDOC
    //   nowdoc         T_START_NOWDOC T_NOWDOC T_END_NOWDOC
    //   define         T_STRING
    //   class constant T_STRING T_DOUBLE_COLON T_STRING
    // Search backwards for first token that isn't whitespace, comma, variable,
    // equals, or on the list of assignable constant values above.
    $staticPtr = $phpcsFile->findPrevious(
      [
        T_WHITESPACE, T_VARIABLE, T_COMMA, T_EQUAL,
        T_MINUS, T_LNUMBER, T_DNUMBER,
        T_CONSTANT_ENCAPSED_STRING,
        T_STRING,
        T_DOUBLE_COLON,
        T_START_HEREDOC, T_HEREDOC, T_END_HEREDOC,
        T_START_NOWDOC, T_NOWDOC, T_END_NOWDOC,
      ],
      $stackPtr - 1,
      null,
      true,
      null,
      true
    );
    if (($staticPtr === false) || ($tokens[$staticPtr]['code'] !== T_STATIC)) {
      return false;
    }

    // Is it a late static binding static::?
    // If so, this isn't the static keyword we're looking for, but since
    // static:: isn't allowed in a compile-time constant, we also know
    // we can't be part of a static declaration anyway, so there's no
    // need to look any further.
    $lateStaticBindingPtr = $phpcsFile->findNext(T_WHITESPACE, $staticPtr + 1, null, true, null, true);
    if (($lateStaticBindingPtr !== false) && ($tokens[$lateStaticBindingPtr]['code'] === T_DOUBLE_COLON)) {
      return false;
    }

    // It's a static declaration.
    $this->markVariableDeclaration($varName, 'static', null, $stackPtr, $currScope);
    if (Helpers::getNextAssignPointer($phpcsFile, $stackPtr) !== null) {
      $this->markVariableAssignment($varName, $stackPtr, $currScope);
    }
    return true;
  }

  /**
   * @param string $varName
   *
   * @return bool
   */
  protected function checkForNumericVariable($varName) {
    return is_numeric(substr($varName, 0, 1));
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForForeachLoopVar(File $phpcsFile, $stackPtr, $varName, $currScope) {
    $tokens = $phpcsFile->getTokens();

    // Are we a foreach loopvar?
    $openParenPtr = Helpers::findContainingOpeningBracket($phpcsFile, $stackPtr);
    if (! is_int($openParenPtr)) {
      return false;
    }
    $foreachPtr = Helpers::findParenthesisOwner($phpcsFile, $openParenPtr);
    if (! is_int($foreachPtr)) {
      return false;
    }
    if ($tokens[$foreachPtr]['code'] === T_LIST) {
      $openParenPtr = Helpers::findContainingOpeningBracket($phpcsFile, $foreachPtr);
      if (! is_int($openParenPtr)) {
        return false;
      }
      $foreachPtr = Helpers::findParenthesisOwner($phpcsFile, $openParenPtr);
      if (! is_int($foreachPtr)) {
        return false;
      }
    }
    if ($tokens[$foreachPtr]['code'] !== T_FOREACH) {
      return false;
    }

    // Is there an 'as' token between us and the foreach?
    if ($phpcsFile->findPrevious(T_AS, $stackPtr - 1, $openParenPtr) === false) {
      return false;
    }
    $this->markVariableAssignment($varName, $stackPtr, $currScope);
    $varInfo = $this->getOrCreateVariableInfo($varName, $currScope);

    // Is this the value of a key => value foreach?
    if ($phpcsFile->findPrevious(T_DOUBLE_ARROW, $stackPtr - 1, $openParenPtr) !== false) {
      $varInfo->isForeachLoopAssociativeValue = true;
    }

    return true;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForPassByReferenceFunctionCall(File $phpcsFile, $stackPtr, $varName, $currScope) {
    $tokens = $phpcsFile->getTokens();

    // Are we pass-by-reference to known pass-by-reference function?
    $functionPtr = Helpers::findFunctionCall($phpcsFile, $stackPtr);
    if ($functionPtr === null || ! isset($tokens[$functionPtr])) {
      return false;
    }

    // Is our function a known pass-by-reference function?
    $functionName = $tokens[$functionPtr]['content'];
    $refArgs = $this->getPassByReferenceFunction($functionName);
    if (! $refArgs) {
      return false;
    }

    $argPtrs = Helpers::findFunctionCallArguments($phpcsFile, $stackPtr);

    // We're within a function call arguments list, find which arg we are.
    $argPos = false;
    foreach ($argPtrs as $idx => $ptrs) {
      if (in_array($stackPtr, $ptrs)) {
        $argPos = $idx + 1;
        break;
      }
    }
    if ($argPos === false) {
      return false;
    }
    if (!in_array($argPos, $refArgs)) {
      // Our arg wasn't mentioned explicitly, are we after an elipsis catch-all?
      $elipsis = array_search('...', $refArgs);
      if ($elipsis === false) {
        return false;
      }
      $elipsis = (int)$elipsis;
      if ($argPos < $refArgs[$elipsis - 1]) {
        return false;
      }
    }

    // Our argument position matches that of a pass-by-ref argument,
    // check that we're the only part of the argument expression.
    foreach ($argPtrs[$argPos - 1] as $ptr) {
      if ($ptr === $stackPtr) {
        continue;
      }
      if (isset(Tokens::$emptyTokens[$tokens[$ptr]['code']]) === false) {
        return false;
      }
    }

    // Just us, we can mark it as a write.
    $this->markVariableAssignment($varName, $stackPtr, $currScope);
    // It's a read as well for purposes of used-variables.
    $this->markVariableRead($varName, $stackPtr, $currScope);
    return true;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param string $varName
   * @param int $currScope
   *
   * @return bool
   */
  protected function checkForSymbolicObjectProperty(File $phpcsFile, $stackPtr, $varName, $currScope) {
    $tokens = $phpcsFile->getTokens();

    // Are we a symbolic object property/function derefeference?
    // Search backwards for first token that isn't whitespace, is it a "->" operator?
    $objectOperatorPtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $stackPtr - 1, null, true, null, true);
    if (($objectOperatorPtr === false) || ($tokens[$objectOperatorPtr]['code'] !== T_OBJECT_OPERATOR)) {
      return false;
    }

    $this->markVariableReadAndWarnIfUndefined($phpcsFile, $varName, $stackPtr, $currScope);
    return true;
  }

  /**
   * Called to process normal member vars.
   *
   * @param File $phpcsFile The PHP_CodeSniffer file where this token was found.
   * @param int $stackPtr  The position where the token was found.
   *
   * @return void
   */
  protected function processVariable(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();
    $token  = $tokens[$stackPtr];

    $varName = Helpers::normalizeVarName($token['content']);
    Helpers::debug('examining token ' . $varName);
    $currScope = Helpers::findVariableScope($phpcsFile, $stackPtr);
    if ($currScope === null) {
      Helpers::debug('no scope found');
      return;
    }

    // Determine if variable is being assigned or read.

    // Read methods that preempt assignment:
    //   Are we a $object->$property type symbolic reference?

    // Possible assignment methods:
    //   Is a mandatory function/closure parameter
    //   Is an optional function/closure parameter with non-null value
    //   Is closure use declaration of a variable defined within containing scope
    //   catch (...) block start
    //   $this within a class.
    //   $GLOBALS, $_REQUEST, etc superglobals.
    //   $var part of class::$var static member
    //   Assignment via =
    //   Assignment via list (...) =
    //   Declares as a global
    //   Declares as a static
    //   Assignment via foreach (... as ...) { }
    //   Pass-by-reference to known pass-by-reference function

    // Are we a $object->$property type symbolic reference?
    if ($this->checkForSymbolicObjectProperty($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found symbolic object property');
      return;
    }

    // Are we a function or closure parameter?
    if ($this->checkForFunctionPrototype($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found function prototype');
      return;
    }

    // Are we a catch parameter?
    if ($this->checkForCatchBlock($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found catch block');
      return;
    }

    // Are we $this within a class?
    if ($this->checkForThisWithinClass($phpcsFile, $stackPtr, $varName)) {
      Helpers::debug('found this usage within a class');
      return;
    }

    // Are we a $GLOBALS, $_REQUEST, etc superglobal?
    if ($this->checkForSuperGlobal($phpcsFile, $stackPtr, $varName)) {
      Helpers::debug('found superglobal');
      return;
    }

    // Check for static members used outside a class
    if ($this->checkForStaticOutsideClass($phpcsFile, $stackPtr, $varName)) {
      Helpers::debug('found static usage outside of class');
      return;
    }

    // $var part of class::$var static member
    if ($this->checkForStaticMember($phpcsFile, $stackPtr)) {
      Helpers::debug('found static member');
      return;
    }

    if ($this->checkForClassProperty($phpcsFile, $stackPtr)) {
      Helpers::debug('found class property definition');
      return;
    }

    // Is the next non-whitespace an assignment?
    if ($this->checkForAssignment($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found assignment');
      return;
    }

    // OK, are we within a list (...) = construct?
    if ($this->checkForListAssignment($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found list assignment');
      return;
    }

    // OK, are we within a [...] = construct?
    if ($this->checkForListShorthandAssignment($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found list shorthand assignment');
      return;
    }

    // Are we a global declaration?
    if ($this->checkForGlobalDeclaration($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found global declaration');
      return;
    }

    // Are we a static declaration?
    if ($this->checkForStaticDeclaration($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found static declaration');
      return;
    }

    // Are we a foreach loopvar?
    if ($this->checkForForeachLoopVar($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found foreach loop variable');
      return;
    }

    // Are we pass-by-reference to known pass-by-reference function?
    if ($this->checkForPassByReferenceFunctionCall($phpcsFile, $stackPtr, $varName, $currScope)) {
      Helpers::debug('found pass by reference');
      return;
    }

    // Are we a numeric variable used for constructs like preg_replace?
    if ($this->checkForNumericVariable($varName)) {
      Helpers::debug('found numeric variable');
      return;
    }

    // OK, we don't appear to be a write to the var, assume we're a read.
    Helpers::debug('looks like a variable read');
    $this->markVariableReadAndWarnIfUndefined($phpcsFile, $varName, $stackPtr, $currScope);
  }

  /**
   * Called to process variables found in double quoted strings.
   *
   * Note that there may be more than one variable in the string, which will
   * result only in one call for the string.
   *
   * @param File $phpcsFile The PHP_CodeSniffer file where this token was found.
   * @param int $stackPtr  The position where the double quoted string was found.
   *
   * @return void
   */
  protected function processVariableInString(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();
    $token  = $tokens[$stackPtr];

    if (!preg_match_all(Constants::getDoubleQuotedVarRegexp(), $token['content'], $matches)) {
      return;
    }

    $currScope = Helpers::findVariableScope($phpcsFile, $stackPtr);
    if ($currScope === null) {
      return;
    }
    foreach ($matches[1] as $varName) {
      $varName = Helpers::normalizeVarName($varName);
      // Are we $this within a class?
      if ($this->checkForThisWithinClass($phpcsFile, $stackPtr, $varName)) {
        continue;
      }

      if ($this->checkForSuperGlobal($phpcsFile, $stackPtr, $varName)) {
        continue;
      }

      // Are we a numeric variable used for constructs like preg_replace?
      if ($this->checkForNumericVariable($varName)) {
        continue;
      }

      $this->markVariableReadAndWarnIfUndefined($phpcsFile, $varName, $stackPtr, $currScope);
    }
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   * @param array[] $arguments The stack pointers of each argument
   * @param int $currScope
   *
   * @return void
   */
  protected function processCompactArguments(File $phpcsFile, $stackPtr, $arguments, $currScope) {
    $tokens = $phpcsFile->getTokens();

    foreach ($arguments as $argumentPtrs) {
      $argumentPtrs = array_values(array_filter($argumentPtrs, function ($argumentPtr) use ($tokens) {
        return isset(Tokens::$emptyTokens[$tokens[$argumentPtr]['code']]) === false;
      }));
      if (empty($argumentPtrs)) {
        continue;
      }
      if (!isset($tokens[$argumentPtrs[0]])) {
        continue;
      }
      $argument_first_token = $tokens[$argumentPtrs[0]];
      if ($argument_first_token['code'] === T_ARRAY) {
        // It's an array argument, recurse.
        $array_arguments = Helpers::findFunctionCallArguments($phpcsFile, $argumentPtrs[0]);
        $this->processCompactArguments($phpcsFile, $stackPtr, $array_arguments, $currScope);
        continue;
      }
      if (count($argumentPtrs) > 1) {
        // Complex argument, we can't handle it, ignore.
        continue;
      }
      if ($argument_first_token['code'] === T_CONSTANT_ENCAPSED_STRING) {
        // Single-quoted string literal, ie compact('whatever').
        // Substr is to strip the enclosing single-quotes.
        $varName = substr($argument_first_token['content'], 1, -1);
        $this->markVariableReadAndWarnIfUndefined($phpcsFile, $varName, $argumentPtrs[0], $currScope);
        continue;
      }
      if ($argument_first_token['code'] === T_DOUBLE_QUOTED_STRING) {
        // Double-quoted string literal.
        if (preg_match(Constants::getDoubleQuotedVarRegexp(), $argument_first_token['content'])) {
          // Bail if the string needs variable expansion, that's runtime stuff.
          continue;
        }
        // Substr is to strip the enclosing double-quotes.
        $varName = substr($argument_first_token['content'], 1, -1);
        $this->markVariableReadAndWarnIfUndefined($phpcsFile, $varName, $argumentPtrs[0], $currScope);
        continue;
      }
    }
  }

  /**
   * Called to process variables named in a call to compact().
   *
   * @param File $phpcsFile The PHP_CodeSniffer file where this token was found.
   * @param int $stackPtr  The position where the call to compact() was found.
   *
   * @return void
   */
  protected function processCompact(File $phpcsFile, $stackPtr) {
    $currScope = Helpers::findVariableScope($phpcsFile, $stackPtr);
    if ($currScope === null) {
      return;
    }

    $arguments = Helpers::findFunctionCallArguments($phpcsFile, $stackPtr);
    $this->processCompactArguments($phpcsFile, $stackPtr, $arguments, $currScope);
  }

  /**
   * Called to process the end of a scope.
   *
   * Note that although triggered by the closing curly brace of the scope, $stackPtr is
   * the scope conditional, not the closing curly brace.
   *
   * @param File $phpcsFile The PHP_CodeSniffer file where this token was found.
   * @param int $stackPtr  The position of the scope conditional.
   *
   * @return void
   */
  protected function processScopeClose(File $phpcsFile, $stackPtr) {
    $scopeInfo = $this->getScopeInfo($stackPtr);
    if (is_null($scopeInfo)) {
      return;
    }
    foreach ($scopeInfo->variables as $varInfo) {
      $this->processScopeCloseForVariable($phpcsFile, $varInfo, $scopeInfo);
    }
  }

  /**
   * @param File $phpcsFile
   * @param VariableInfo $varInfo
   * @param ScopeInfo $scopeInfo
   *
   * @return void
   */
  protected function processScopeCloseForVariable(File $phpcsFile, VariableInfo $varInfo, ScopeInfo $scopeInfo) {
    if ($varInfo->ignoreUnused || isset($varInfo->firstRead)) {
      return;
    }
    if ($this->allowUnusedFunctionParameters && $varInfo->scopeType === 'param') {
      return;
    }
    if ($this->allowUnusedParametersBeforeUsed && $varInfo->scopeType === 'param' && $this->areFollowingArgumentsUsed($varInfo, $scopeInfo)) {
      Helpers::debug("variable {$varInfo->name} at end of scope has unused following args");
      return;
    }
    if ($this->allowUnusedForeachVariables && $varInfo->isForeachLoopAssociativeValue) {
      return;
    }
    if ($varInfo->passByReference && isset($varInfo->firstInitialized)) {
      // If we're pass-by-reference then it's a common pattern to
      // use the variable to return data to the caller, so any
      // assignment also counts as "variable use" for the purposes
      // of "unused variable" warnings.
      return;
    }
    if ($varInfo->scopeType === 'global' && isset($varInfo->firstInitialized)) {
      // If we imported this variable from the global scope, any further use of
      // the variable, including assignment, should count as "variable use" for
      // the purposes of "unused variable" warnings.
      return;
    }
    $stackPtr = null;
    if (!empty($varInfo->firstDeclared)) {
      $stackPtr = $varInfo->firstDeclared;
    } elseif (!empty($varInfo->firstInitialized)) {
      $stackPtr = $varInfo->firstInitialized;
    }
    if ($stackPtr) {
      Helpers::debug("variable {$varInfo->name} at end of scope looks undefined");
      $phpcsFile->addWarning(
        "Unused %s %s.",
        $stackPtr,
        'UnusedVariable',
        [
          VariableInfo::$scopeTypeDescriptions[$varInfo->scopeType],
          "\${$varInfo->name}",
        ]
      );
    }
  }
}
