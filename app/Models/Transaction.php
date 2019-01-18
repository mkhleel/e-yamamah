<?php

namespace App\Models;

use App\BaseModel;

class Transaction extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

}
