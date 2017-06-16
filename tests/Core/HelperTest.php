<?php
use PHPUnit\Framework\TestCase;
use Test\Core\Helper;

class HelperTests extends TestCase{

    public function testIsEqual(){
        $h = new Helper();
        $this->assertEquals($h->printHello(),"hello w00orld!");
    }
}
