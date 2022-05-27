<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public function brand(){
        return $this->belongsTo('App\brand');
    }

    protected $fillable = [
        'brand_id',
        'registration',
        'year_of_manufacture',
        'color'
    ];
}
