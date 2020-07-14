<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kebab extends Model
{
    //
    protected $casts = ['toppings' => 'array'];
}
