<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //

    protected $fillable = [ 'room_no', 'room_type', 'room_discription','room_price',];
}
