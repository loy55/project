<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tool extends Model
{
    protected $fillable =[
        'tools_name','tools_brand','qualification','serial_number','quantity'
    ];
    //
}
