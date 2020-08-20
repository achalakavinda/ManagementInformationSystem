<?php

namespace App\Models\Ims;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $guarded = ['id'];

    public  function items(){
        return $this->hasMany('App\Models\Ims\ItemCode');
    }

}