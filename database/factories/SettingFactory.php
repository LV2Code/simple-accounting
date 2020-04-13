<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        'company_name' => $faker->company,
    	'country' => $faker->countryCode,
    	'street' => $faker->streetAddress,
    	'city' => $faker->city,
    	'state' => $faker->state,
    	'zip_code' => $faker->postcode,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'contact_number' => $faker->phoneNumber,
    ];
});
