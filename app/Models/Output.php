<?php

namespace App\Models;

use App\BaseModel;

class Output extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

}
