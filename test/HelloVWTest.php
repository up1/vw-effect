<?php
class HelloVWTest extends PHPUnit_Framework_TestCase{
    private $emissions = 12000;

    private $legalLimit = 300;

    public function testEnvironmentalImpactCompliance()
    {
        $this->assertLessThan($this->legalLimit, $this->emissions);
    }
}
?>
