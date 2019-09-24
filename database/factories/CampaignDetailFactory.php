<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CampaignDetail;
use Faker\Generator as Faker;

$factory->define(CampaignDetail::class, function (Faker $faker) {
    return [
        'store_id'=>\App\Store::all()->random()->id
    ];
});