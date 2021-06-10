<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //

    protected $fillable = [
        'id', 'userid', 'name', 'address', 'locationLat', 'locationLon', 'createdDate', 
     ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function devices(){
        return $this->hasMany(Device::class);
    }
}
