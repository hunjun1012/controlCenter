<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    //
    protected $fillable = [
        'id', 'eventid', 'status', 'soundurl', 'datetime',
     ];
     public function events(){
        return $this->belongsTo(Event::class);
    }
}
