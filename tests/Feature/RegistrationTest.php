<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response\type;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testViewRegisterForm()
    {
        $response = $this->get('signup');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }
    public function testRegisterUser()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('1235678');
        $user->save();

        $this->assertDatabaseHas('users', ['email' => 'example@yrgo.se']);

        // $user = User::factory()->create();
        // $user->save();
        // $this->assertDatabaseHas('users', ['email' => 'example@yrgo.se']);
        // $this->assertDatabaseHas('users', ['email' => $user->email, "password" => $user->password]);
    }
}
