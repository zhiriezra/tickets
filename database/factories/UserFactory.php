<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Category;
use App\Event;
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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Category::class, function (Faker $faker){
	return [
		'name' => $faker->name,
		'slug' => str_slug($faker->name),
	];
});


$factory->define(Event::class, function (Faker $faker){
	return [
		'user_id' => $faker->numberBetween(1,10),
		'category_id' => $faker->numberBetween(1,2),
		'name' => $faker->name,
		'slug' => str_slug($faker->name),
		'cover_image' => '1565716509.png',
		'price_regular' => 1000,
		'price_vip' => 2000,
		'price_vvip' => 3000,
		'venue' => $faker->address,
		'description' => $faker->paragraph(5),
		'active' => $faker->numberBetween(0,1),
		'event_date' => $faker->dateTimeThisMonth(),
	];
});