<?php
class MathTest extends PHPUnit_Framework_TestCase{
  public function testDouble() {
    $this->assertEquals(4, \MathDockerIntero\Math::double(2));
  }
}