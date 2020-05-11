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
        ['name' => 'A B C',
        'role'=>'1',
        'password' => bcrypt('12345678'),
        'address'=>'',
        'phone'=>'',
        'dob'=>'',
        'email'=>'admin@admin.com',
        'remember_token' => Str::random(10),],

        ['name' => 'D E F',
        'role'=>'0',
        'password' => bcrypt('12345678'),
        'address'=>'',
        'phone'=>'',
        'dob'=>'',
        'email'=>'admin2@admin.com',
        'remember_token' => Str::random(10),]
    ];
});
