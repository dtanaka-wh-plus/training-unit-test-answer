<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');

class MainTest extends TestCase
{
  function testIsSunday(){
    $this->assertEquals(true, isSunday(new DateTime('2021/03/21')));
  }

  function testIsNotSunday(){
    $this->assertEquals(false, isSunday(new DateTime('2021/03/22')));
  }
}
