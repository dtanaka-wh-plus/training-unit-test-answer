<?php
use PHPUnit\Framework\TestCase;
require_once(dirname(__FILE__).'/main.php');

class MainTest extends TestCase
{
  function testDiscount(){
    $this->assertEquals(600, discount(800, 200));
  }

  function testDiscountMinZero(){
    $this->assertEquals(0, discount(100, 200));
  }

  function testGetDiscountPriceOnBirthday(){
    $this->assertEquals(400, getDiscountPrice(200, true));
  }

  function testGetDiscountPriceNotOnBirthday(){
    $this->assertEquals(200, getDiscountPrice(200, false));
  }
}
