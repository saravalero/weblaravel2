<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Productos::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'precio' => $faker->randomNumber(2),
        'rutaimg' => $faker->imageUrl($width=800, $height=600, 'cats', true, 'Faker', true),
        'stock' => $faker->randomDigit,
        'descripcion' => $faker->text
];
});
