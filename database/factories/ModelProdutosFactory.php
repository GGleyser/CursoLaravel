<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelProdutos;
use Faker\Generator as Faker;

$factory->define(ModelProdutos::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'descricao' => $faker->paragraph,
        'valor' => 100.00,
    ];
});
