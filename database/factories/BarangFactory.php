<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Barang;
use Faker\Generator as Faker;

$factory->define(Barang::class, function (Faker $faker) {

	$list_barang = [
    	'Pengharum ruangan',
    	'Remote Projector',
    	'Converter HDMI',
    	'Projector',
    	'Remote AC',
    	'LCD',
			'Laptop Gaming'
    ];

    return [
				'ruangan_id' => $faker->numberBetween($min = 1, $max = 7),
      	'name' => $faker->unique()->randomElement($list_barang),
				'file' => 'img/accountt.png',
        'total' => $faker->numberBetween($min = 3, $max = 7),
        'broken' => $faker->numberBetween($min = 1, $max = 3),
        'created_by' => $faker->numberBetween($min = 1, $max = 3),
				'updated_by' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
