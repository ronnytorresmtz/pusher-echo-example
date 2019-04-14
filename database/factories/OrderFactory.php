<?php

use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'order_id' => 1,
        'user_id' => 1,
    ];
});
