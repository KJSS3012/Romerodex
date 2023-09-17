<?php

namespace Tests\Unit;

use App\Models\Romeromon;
use PHPUnit\Framework\TestCase;

class RomeromonTest extends TestCase
{
    public function test_check_columns_romeromons(){
        $romeromon = new Romeromon();
        $expected = ['rol_description','rol_name','bal_romeroball'];

        $copared = array_diff($expected, $romeromon->getFillable());
        $this->assertEquals(0, count($copared));
    }
}
