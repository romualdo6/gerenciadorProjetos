<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'owner_id' => rand(1, 5),
        'client_id' => rand(1, 5),
        'name' => $faker->word,
        'description' => $faker->sentence,
        'progress' => rand(1,100),
        'status' => rand(1,3),
        'due_date' => $faker->dateTime('now')
    ];
});
