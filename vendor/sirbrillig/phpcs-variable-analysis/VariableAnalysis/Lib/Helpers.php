<?php

namespace VariableAnalysis\Lib;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Util\Tokens;

class Helpers {
  /**
   * @param int|bool $value
   *
   * @return ?int
   */
  public static function getIntOrNull($value) {
    return is_int($value) ? $value: null;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return ?int
   */
  public static function findContainingOpeningSquareBracket(File $phpcsFile, $stackPtr) {
    $previousStatementPtr = self::getPreviousStatementPtr($phpcsFile, $stackPtr);
    return self::getIntOrNull($phpcsFile->findPrevious([T_OPEN_SHORT_ARRAY], $stackPtr - 1, $previousStatementPtr));
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return ?int
   */
  public static function findContainingClosingSquareBracket(File $phpcsFile, $stackPtr) {
    $endOfStatementPtr = self::getIntOrNull($phpcsFile->findNext([T_SEMICOLON], $stackPtr + 1));
    if (! $endOfStatementPtr) {
      return null;
    }
    return self::getIntOrNull($phpcsFile->findNext([T_CLOSE_SHORT_ARRAY], $stackPtr + 1, $endOfStatementPtr));
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return int
   */
  public static function getPreviousStatementPtr(File $phpcsFile, $stackPtr) {
    $result = $phpcsFile->findPrevious([T_SEMICOLON, T_CLOSE_CURLY_BRACKET], $stackPtr - 1);
    return is_bool($result) ? 1 : $result;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return ?int
   */
  public static function findContainingOpeningBracket(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();
    if (isset($tokens[$stackPtr]['nested_parenthesis'])) {
      $openPtrs = array_keys($tokens[$stackPtr]['nested_parenthesis']);
      return (int)end($openPtrs);
    }
    return null;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return ?int
   */
  public static function findParenthesisOwner(File $phpcsFile, $stackPtr) {
    return self::getIntOrNull($phpcsFile->findPrevious(Tokens::$emptyTokens, $stackPtr - 1, null, true));
  }

  /**
   * @param (int|string)[] $conditions
   *
   * @return bool
   */
  public static function areAnyConditionsAClass(array $conditions) {
    foreach (array_reverse($conditions, true) as $scopeCode) {
      if ($scopeCode === T_CLASS || $scopeCode === T_ANON_CLASS || $scopeCode === T_TRAIT) {
        return true;
      }
    }
    return false;
  }

  /**
   * @param (int|string)[] $conditions
   *
   * @return bool
   */
  public static function areConditionsWithinFunctionBeforeClass(array $conditions) {
    // Return true if the token conditions are within a function before
    // they are within a class.
    $classTypes = [T_CLASS, T_ANON_CLASS, T_TRAIT];
    foreach (array_reverse($conditions, true) as $scopeCode) {
      if (in_array($scopeCode, $classTypes)) {
        return false;
      }
      if ($scopeCode === T_FUNCTION) {
        return true;
      }
    }
    return false;
  }

  /**
   * @param File $phpcsFile
   * @param int $openPtr
   *
   * @return ?int
   */
  public static function findPreviousFunctionPtr(File $phpcsFile, $openPtr) {
    // Function names are T_STRING, and return-by-reference is T_BITWISE_AND,
    // so we look backwards from the opening bracket for the first thing that
    // isn't a function name, reference sigil or whitespace and check if it's a
    // function keyword.
    $functionPtrTypes                = Tokens::$emptyTokens;
    $functionPtrTypes[T_STRING]      = T_STRING;
    $functionPtrTypes[T_BITWISE_AND] = T_BITWISE_AND;

    return self::getIntOrNull($phpcsFile->findPrevious($functionPtrTypes, $openPtr - 1, null, true, null, true));
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return ?int
   */
  public static function findFunctionCall(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    $openPtr = Helpers::findContainingOpeningBracket($phpcsFile, $stackPtr);
    if (is_int($openPtr)) {
      // First non-whitespace thing and see if it's a T_STRING function name
      $functionPtr = $phpcsFile->findPrevious(Tokens::$emptyTokens, $openPtr - 1, null, true, null, true);
      if (is_int($functionPtr) && $tokens[$functionPtr]['code'] === T_STRING) {
        return $functionPtr;
      }
    }
    return null;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return array[]
   */
  public static function findFunctionCallArguments(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    // Slight hack: also allow this to find args for array constructor.
    if (($tokens[$stackPtr]['code'] !== T_STRING) && ($tokens[$stackPtr]['code'] !== T_ARRAY)) {
      // Assume $stackPtr is something within the brackets, find our function call
      $stackPtr = Helpers::findFunctionCall($phpcsFile, $stackPtr);
      if ($stackPtr === null) {
        return [];
      }
    }

    // $stackPtr is the function name, find our brackets after it
    $openPtr = $phpcsFile->findNext(Tokens::$emptyTokens, $stackPtr + 1, null, true, null, true);
    if (($openPtr === false) || ($tokens[$openPtr]['code'] !== T_OPEN_PARENTHESIS)) {
        return [];
    }

    if (!isset($tokens[$openPtr]['parenthesis_closer'])) {
        return [];
    }
    $closePtr = $tokens[$openPtr]['parenthesis_closer'];

    $argPtrs = [];
    $lastPtr = $openPtr;
    $lastArgComma = $openPtr;
    $nextPtr = $phpcsFile->findNext([T_COMMA], $lastPtr + 1, $closePtr);
    while (is_int($nextPtr)) {
      if (Helpers::findContainingOpeningBracket($phpcsFile, $nextPtr) == $openPtr) {
        // Comma is at our level of brackets, it's an argument delimiter.
        array_push($argPtrs, range($lastArgComma + 1, $nextPtr - 1));
        $lastArgComma = $nextPtr;
      }
      $lastPtr = $nextPtr;
      $nextPtr = $phpcsFile->findNext([T_COMMA], $lastPtr + 1, $closePtr);
    }
    array_push($argPtrs, range($lastArgComma + 1, $closePtr - 1));

    return $argPtrs;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return int
   */
  public static function findWhereAssignExecuted(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    //  Write should be recorded at the next statement to ensure we treat the
    //  assign as happening after the RHS execution.
    //  eg: $var = $var + 1; -> RHS could still be undef.
    //  However, if we're within a bracketed expression, we take place at the
    //  closing bracket, if that's first.
    //  eg: echo (($var = 12) && ($var == 12));
    $semicolonPtr = $phpcsFile->findNext([T_SEMICOLON], $stackPtr + 1, null, false, null, true);
    $commaPtr = $phpcsFile->findNext([T_COMMA], $stackPtr + 1, null, false, null, true);
    $closePtr = false;
    $openPtr = Helpers::findContainingOpeningBracket($phpcsFile, $stackPtr);
    if ($openPtr !== null) {
      if (isset($tokens[$openPtr]['parenthesis_closer'])) {
        $closePtr = $tokens[$openPtr]['parenthesis_closer'];
      }
    }

    // Return the first thing: comma, semicolon, close-bracket, or stackPtr if nothing else
    $assignEndTokens = [$commaPtr, $semicolonPtr, $closePtr];
    $assignEndTokens = array_filter($assignEndTokens); // remove false values
    sort($assignEndTokens);
    if (empty($assignEndTokens)) {
      return $stackPtr;
    }
    return $assignEndTokens[0];
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return ?int
   */
  public static function getNextAssignPointer(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    // Is the next non-whitespace an assignment?
    $nextPtr = $phpcsFile->findNext(Tokens::$emptyTokens, $stackPtr + 1, null, true, null, true);
    if (is_int($nextPtr)
      && isset(Tokens::$assignmentTokens[$tokens[$nextPtr]['code']])
      // Ignore double arrow to prevent triggering on `foreach ( $array as $k => $v )`.
      && $tokens[$nextPtr]['code'] !== T_DOUBLE_ARROW
    ) {
      return $nextPtr;
    }
    return null;
  }

  /**
   * @param string $varName
   *
   * @return string
   */
  public static function normalizeVarName($varName) {
    $result = preg_replace('/[{}$]/', '', $varName);
    return $result ? $result : $varName;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return ?int
   */
  public static function findFunctionPrototype(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    $openPtr = Helpers::findContainingOpeningBracket($phpcsFile, $stackPtr);
    if (! is_int($openPtr)) {
      return null;
    }
    $functionPtr = Helpers::findPreviousFunctionPtr($phpcsFile, $openPtr);
    if (($functionPtr !== null) && ($tokens[$functionPtr]['code'] === T_FUNCTION)) {
      return $functionPtr;
    }
    return null;
  }

  /**
   * @param File $phpcsFile
   * @param int $stackPtr
   *
   * @return ?int
   */
  public static function findVariableScope(File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();
    $token  = $tokens[$stackPtr];

    $in_class = false;
    if (!empty($token['conditions'])) {
      foreach (array_reverse($token['conditions'], true) as $scopePtr => $scopeCode) {
        if (($scopeCode === T_FUNCTION) || ($scopeCode === T_CLOSURE)) {
          return $scopePtr;
        }
        if (isset(Tokens::$ooScopeTokens[$scopeCode]) === true) {
          $in_class = true;
        }
      }
    }

    $scopePtr = Helpers::findFunctionPrototype($phpcsFile, $stackPtr);
    if (is_int($scopePtr)) {
      return $scopePtr;
    }

    if ($in_class) {
      // Member var of a class, we don't care.
      return null;
    }

    // File scope, hmm, lets use first token of file?
    return 0;
  }

  /**
   * @param string $message
   *
   * @return void
   */
  public static function debug($message) {
    if (! defined('PHP_CODESNIFFER_VERBOSITY')) {
      return;
    }
    if (PHP_CODESNIFFER_VERBOSITY > 3) {
      echo PHP_EOL . "VariableAnalysisSniff: DEBUG: $message" . PHP_EOL;
    }
  }

  /**
   * @param string $pattern
   * @param string $value
   *
   * @return string[]
   */
  public static function splitStringToArray($pattern, $value) {
    $result = preg_split($pattern, $value);
    return is_array($result) ? $result : [];
  }
}
