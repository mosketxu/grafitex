<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Campaign;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Campaign::class, function (Faker $faker) {
    $camp=$faker->sentence(2);
    $slug=Str::slug($camp);
    return [
        'campaign'=>$camp,
        'campaign_date'=>$faker->date(),
        'slug' =>$slug,
    ];
});
