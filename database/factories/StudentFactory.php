<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
			'name'=>$faker->name,
			'email'=>$faker->safeEmail,
			'semester'=>$faker->biasedNumberBetween($min=1,$max=8),
			'phone'=>$faker->biasedNumberBetween($min=1000000000,$max=9999999999),
    ];
});
