<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use SoftDeletes;

    protected $fillable=['campaign','campaign_date','campaign_state'];
    protected $dates = ['deleted_at'];

    // public function campaigndetails()
    // {
    //     return $this->hasMany(CampaignDetail::class);
    // }

    public function stores(){
        return $this->belongsToMany(Store::class)->withPivot(['quantity']);
    }
}
