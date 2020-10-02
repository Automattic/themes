<?php

namespace VariableAnalysis\Lib;

/**
 * Holds details of a scope.
 */
class ScopeInfo {
  /**
   * @var int
   */
  public $owner;

  /**
   * @var VariableInfo[]
   */
  public $variables = [];

  public function __construct($currScope) {
    $this->owner = $currScope;
  }
}
