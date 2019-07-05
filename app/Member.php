<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=[
        'first_name','last_name','email','address_lane','address_city','username','password','biography'
    ];

    protected $hidden=['password'];
}
