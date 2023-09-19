<?php

namespace Tests\Unit;

use App\Models\Romeroball;
use App\Models\Romeromon;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RomeromonTest extends TestCase {
    
    use RefreshDatabase;

    /** @test */
    public function check_columns_romeromons(){
        $romeromon = new Romeromon();
        $expected = ['rol_description','rol_name','bal_romeroball'];

        $copared = array_diff($expected, $romeromon->getFillable());
        $this->assertEquals(0, count($copared));
    }

    /** @test */
    public function create_romeromon(){
        Auth::login(User::factory()->create());
        $ball = new Romeroball();
        $ball->bal_romeroball = 'ball';
        $ball->save();
        $response = $this->post('romerodex', ['nr' => 'charlon', 'dc' => 'xxxxx', 'rb' => 1]);
        $response->assertStatus(200);
    } 

}
