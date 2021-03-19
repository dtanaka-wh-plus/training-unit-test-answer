<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');

class MainTest extends TestCase
{
  function test(){
    $GLOBALS['A'] = true;
    $GLOBALS['B'] = true;
    $GLOBALS['C'] = false;
    $this->assertEquals(true, isOk());
  }
}
