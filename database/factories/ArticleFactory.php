<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'category_id'   => 1,
        'slug'          => $faker->unique()->slug,
        'title'         => $faker->sentence,
        'content'       => $faker->text(rand(300, 500)),
        'published_at' => $faker->dateTimeBetween('-1 years', '+1 years')->format('Y-m-d H:i:s'),
        'og_title'      => $faker->optional()->sentence,
        'og_description' => $faker->optional()->sentences(rand(1, 2), true),
    ];
});
