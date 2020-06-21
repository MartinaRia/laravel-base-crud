<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OminiModel;
use Faker\Generator as Faker;

$factory->define(OminiModel::class, function (Faker $faker) {
    return [
      'firstname'     => $faker -> firstName(),
      'lastname'      => $faker -> lastName (),
      'address'       => $faker -> streetAddress (),
      'code'          => $faker -> postcode(),
      'state'         => $faker -> country(),
      'phonenumber'   => $faker -> e164PhoneNumber(),
      'role'          => $faker -> jobTitle()
    ];
});
