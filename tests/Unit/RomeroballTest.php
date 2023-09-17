<?php

namespace Tests\Unit;

use App\Models\Romeroball;
use PHPUnit\Framework\TestCase;

class RomeroballTest extends TestCase {
    public function test_check_columns_romeroballs(){
        $romeroball = new Romeroball();
        $expected = ['bal_romeroball'];

        $copared = array_diff($expected, $romeroball->getFillable());
        $this->assertEquals(0, count($copared));
    }
}
