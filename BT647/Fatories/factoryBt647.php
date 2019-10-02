<?php

use Faker\Generator as Faker;

$factory->define(App\Model_Bt647::class, function (Faker $faker) {
    return [
        'name_product' => $faker -> name,
        'price' => $faker -> randomDigit,
        'reduce_price' => $faker -> randomDigit,
        'description' => $faker ->text(50),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
