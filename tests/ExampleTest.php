<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testTambah()
    {
        $hasil = 2 + 3;
        $this->assertEquals(5, $hasil);
    }
}
