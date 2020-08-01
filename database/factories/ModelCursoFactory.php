<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelCurso;
use Faker\Generator as Faker;

$factory->define(ModelCurso::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'descricao' => $faker->paragraph,
        'valor' => 100.00,
        'imagem' => '',
        'publicado' => 'sim',
    ];
});
