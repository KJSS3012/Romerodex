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
    
    public function test_name_null() {
        $user = User::factory()->make(['name' => null]);
        $validator = validator($user->toArray(), User::validationRules());

        $this->assertTrue($validator->fails());
    }

    public function test_check_columns_users() {
        $user = new User;
        $expected = ['name', 'email', 'password'];

        $compared = array_diff($expected, $user->getFillable());
        $this->assertEquals(0, count($compared));
    }

    public function test_user_email_IsRequired() {
        $user = User::factory()->make(['email' => null]);
        $validator = validator($user->toArray(), User::validationRules());

        $this->assertTrue($validator->fails());
    }

}
