<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [ 'lat', 'lng'];

    public function hotels(){
        return $this->hasMany('App\Hotel');
    }
}
