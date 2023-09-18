<?php
namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker; 
    
    /** @test */
    public function check_columns_users() {
        $user = new User;
        $expected = ['name', 'email', 'password'];

        $compared = array_diff($expected, $user->getFillable());
        $this->assertEquals(0, count($compared));
    }


}
