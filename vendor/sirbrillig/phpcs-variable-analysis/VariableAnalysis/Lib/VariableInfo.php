<?php

namespace VariableAnalysis\Lib;

/**
 * Holds details of a variable within a scope.
 */
class VariableInfo {
  /**
   * @var string
   */
  public $name;

  /**
   * What scope the variable has: local, param, static, global, bound
   *
   * @var string
   */
  public $scopeType;

  /**
   * @var string
   */
  public $typeHint;

  /**
   * @var bool
   */
  public $passByReference = false;

  /**
   * @var bool
   */
  public $isReference = false;

  /**
   * Stack pointer of first declaration
   *
   * @var int
   */
  public $firstDeclared;

  /**
   * Stack pointer of first initialization
   *
   * @var int
   */
  public $firstInitialized;

  /**
   * Stack pointer of first read
   *
   * @var int
   */
  public $firstRead;

  /**
   * @var bool
   */
  public $ignoreUnused = false;

  /**
   * @var bool
   */
  public $ignoreUndefined = false;

  /**
   * @var bool
   */
  public $isForeachLoopAssociativeValue = false;

  /**
   * @var string[]
   */
  public static $scopeTypeDescriptions = array(
    'local'  => 'variable',
    'param'  => 'function parameter',
    'static' => 'static variable',
    'global' => 'global variable',
    'bound'  => 'bound variable',
  );

  public function __construct($varName) {
    $this->name = $varName;
  }
}
