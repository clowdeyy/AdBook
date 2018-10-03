<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    public $primaryKey = 'id'; 

    public function users(){
        return $this->belongsToMany('User','user_id');
    }

    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function contact(){
        return $this->belongsToMany(Contact::class);
    }

    public function information(){
        return $this->belongsToMany(Information::class);
    }

    public function map(){
        return $this->belongsToMany(Map::class);
    }
}
