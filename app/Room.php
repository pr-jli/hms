<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'id','room type'
    ];
 
    public function users()
    {
        return $this->hasMany('App\User');
    }
    //
    public function request()
    {
        return $this->hasOne('App\Request');
    }
    public function room_type()
    {
        return $this->hasMany('App\Room_Type');

    }

}
