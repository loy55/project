<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borrow extends Model
{
    protected $fillable = [
        'borrower_fname', 'borrower_mname','borrower_lname','borrow','qualification','serial_number','quantity'
    ];
    //
}
