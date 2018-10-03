<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function booking()
    {
        // return $this->HasOne(Bookings::class, 'room_id')->withTrashed();
        return $this->HasOne(Bookings::class);
    }
}
