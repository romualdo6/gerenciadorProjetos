<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'responsavel' => $faker->name,
        'email' => $faker->unique()->companyEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence
    ];
});
