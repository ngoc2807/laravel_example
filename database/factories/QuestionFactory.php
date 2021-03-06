<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Question::class, function (Faker $faker) {
    return [
        'title'=> rtrim($faker->sentence(rand(5,10)),"."),//rtrim de bo dau "." sau moi doan van
        'body'=> $faker->paragraph(rand(3,7), true),//set true de xuat mot doan van hoan chinh thay vi array
        'views'=>rand(0,10),
//        'answers_count'=>rand(0,10),
        'votes'=>rand(-3,10),
    ];
});
