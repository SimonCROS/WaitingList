<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        "title" => $faker->name,
        "desc" => $faker->text,
        "ask_id" => 1
    ];
});