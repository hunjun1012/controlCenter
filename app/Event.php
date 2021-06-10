<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'id', 'deviceid', 'event', 'checktime', 'checktime', 'falseAlarmTime', 'inspectionTime', 
     ];
     public function devices(){
        return $this->belongsTo(Device::class);
    }
    public function sounds(){
        return $this->belongsTo(Sound::class);
    }
}
