<?php

Route::get('/stoAsoc/{campaignid}', 'CampaignStoreController@stoAsoc');
Route::get('/stoDisp/{campaignid}', 'CampaignStoreController@stoDisp');
Route::post('/asoc', 'CampaignStoreController@store')->name('campaign.asoc');
Route::delete('/disp', 'CampaignStoreController@destroy');
