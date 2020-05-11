<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User ;
// use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Phạm Văn Hưng',
        'role'=>'1',
        'password' => bcrypt('12345678'),
        'address'=>'Thanh Hương, Thanh Liêm, Hà Nam',
        'phone'=>'0348600111',
        'dob'=>'21/09/1998',
        'email'=>'pham.vanhung.963871@gmail.com',
        'remember_token' => Str::random(10),
    ];
});
