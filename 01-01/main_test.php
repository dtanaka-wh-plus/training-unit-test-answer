<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');

class MainTest extends TestCase
{
  function testIsAdult(){
    $this->assertEquals(true, isAdult(20));
  }

  function testIsNotAdult(){
    $this->assertEquals(false, isAdult(19));
  }
}
