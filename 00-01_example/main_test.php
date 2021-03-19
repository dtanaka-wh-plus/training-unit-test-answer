<?php

use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__).'/main.php');


class MainTest extends TestCase
{
  public function testEqual()
  {
      // 第1引数：期待される値
      // 第2引数：テスト対象の値
      $this->assertEquals(2, 1+1);
  }

  public function testAdd()
  {
      // 第1引数：期待される値
      // 第2引数：テスト対象の値
      $this->assertEquals(2, add(1,1));
      $this->assertEquals(3, add(1,2));
  }

}
