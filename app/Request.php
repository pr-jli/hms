<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $fillable = [
        'request sender','request reciever 1','request reciever 2','status 1','status 2',
        
    ];

}
