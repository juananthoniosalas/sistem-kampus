<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ruangan;
use Faker\Generator as Faker;

$factory->define(Ruangan::class, function (Faker $faker) {

	$list_ruangan = [
		'RA-315',
		'RB-704',
		'RC-823',
		'RD-201',
		'RE-220',
		'RF-204',
		'RG-305',
		'RH-402',
		'RI-502',
		'RJ-609'
	];

    return [
        'name' => $faker->unique()->randomElement($list_ruangan),
        'jurusan_id' => $faker->unique()->numberBetween($min = 1, $max = 10),
    ];
});
