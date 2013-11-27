<?php

class KeyImplodeTest extends \PHPUnit_Framework_TestCase {

    public function testKeyImplode() {
        $imploded = key_implode(':', '/', [
            'page' => 2,
            'letter' => 'A'
        ]);

        $this->assertEquals('page:2/letter:A', $imploded);
    }

}