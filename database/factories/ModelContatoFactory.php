<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelContato;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(ModelContato::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->phoneNumber,
    ];
});
