<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');

class MainTest extends TestCase
{
  function testIsBirthday(){
    $this->assertEquals(8, discount(10, 1, true));
  }
}
