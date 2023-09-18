<?php

namespace Tests\Unit;

use App\Models\Romeromon;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RomeromonTest extends TestCase {
    
    /** @test */
    public function check_columns_romeromons(){
        $romeromon = new Romeromon();
        $expected = ['rol_description','rol_name','bal_romeroball'];

        $copared = array_diff($expected, $romeromon->getFillable());
        $this->assertEquals(0, count($copared));
    }

    /** @test */
    public function create_romeromon(){
        $user = User::factory()->create();
        Auth::login($user);
        $responde = $this->post('romerodex', ['nr' => 'ch', 'dc' => 'xxxxx', 'rb' => 1]);
        $responde->assertStatus(201);
    } 

}
