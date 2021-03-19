<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');

class MainTest extends TestCase
{
  function testSayHello(){
    sayHello();
    $this->assertEquals(1, 1);
  }
}
