<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreElement extends Model
{
    public function element()
    {
        return $this->belongsTo(Element::class);
    }
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
