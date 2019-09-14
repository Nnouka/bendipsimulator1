<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'photo_link' => Contact::getRandomPhotoLink(),
        'name' => $faker->name,
        'details' => $faker->sentence,
        'line_number' => $faker->phoneNumber
    ];
});
