<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_login_form()
    {
        $response = $this->get('login');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }
    public function test_login_user()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('1235678');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => '1235678',
            ]);

        $response->assertSeeText('Hello, Mr Robot!');
    }

    // public function test_login_user()
    // {
    //     $user = User::create([
    //         'name' => 'User test',
    //         'email' => 'example@yrgo.se',
    //         'password' => password_hash('123456', 1)

    //     ]);

    //     $response = $this
    //         ->followingRedirects()
    //         ->post('login', [
    //             'email' => 'example@yrgo.se',
    //             'password' => '123456',
    //         ]);

    //     $response->assertSeeText('Hello, User test!');
    // }

    // Auth::login($user);

    // $response = $this->actingAs($user)
    //     ->withSession(['foo' => 'bar'])
    //     ->get('login');

    // $response->assertSeeText('Hello, User test!');
}

    // public function test_login_user()
    // {

    //

    //     $response = $this
    //         ->followingRedirects()
    //         ->post('login', [
    //             'email' => 'example@yrgo.se',
    //             'password' => '123456',
    //         ]);

    //     $response->assertSeeText('Hello, User test!');
    // }

    // public function test_login_user_without_password()
    // {
    //     $response = $this
    //         ->followingRedirects()
    //         ->post('login', [
    //             'email' => 'example@yrgo.se',
    //         ]);

    //     $response->assertSeeText('Whoops! Please try to login again.');
    // }
