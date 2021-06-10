<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $fillable = [
        'id', 'deviceid', 'address', 'eventlog', 'checktime', 
     ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function sites(){
        return $this->belongsTo(Site::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
}
