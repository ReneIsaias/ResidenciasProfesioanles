<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Files\Models\Careers;
use Faker\Generator as Faker;

$factory->define(Careers::class, function (Faker $faker) {
    return [
    	'keyCareer' => $faker->unique()->name,
    	'careerName' => $faker->unique()->name,
    	'careerStatus' => 1,
    ];
});
