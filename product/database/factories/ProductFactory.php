<?php

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

$factory->define(App\Product::class, function (Faker $faker) {

    $faker = \Faker\Factory::create();
    $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
    return [
        'name' => $faker->productName(50),
        'price' => money_format('%i', $faker->randomNumber(3).'.'.$faker->randomNumber(2)),
    ];
});
