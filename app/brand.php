<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    public function cars(){
        return $this->hasMany('App\car');
    }

    protected $fillable = [
        'name'
    ];
}
