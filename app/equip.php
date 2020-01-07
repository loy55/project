<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equip extends Model
{
    protected $fillable = [
        'equipment_name', 'equipment_brand','qualification','serial_number','quantity'
    ];
    //
}
