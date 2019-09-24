<?php

use Illuminate\Database\Seeder;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Campaign::class, 2)->create()
        ->each(function(\App\Campaign $b){
            factory(\App\CampaignDetail::class,4)->create(['campaign_id'=>$b->id]);
        });
        factory(\App\Campaign::class, 1)->create()
        ->each(function(\App\Campaign $b){
            factory(\App\CampaignDetail::class,3)->create(['campaign_id'=>$b->id]);
        });

        factory(\App\Campaign::class, 3)->create()
        ->each(function(\App\Campaign $b){
            factory(\App\CampaignDetail::class,6)->create(['campaign_id'=>$b->id]);
        });

    }
}
