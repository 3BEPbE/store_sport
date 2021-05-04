<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeZakaz extends Model
{
    protected $fillable = ['user_id', 'product_id', 'count', 'name', 'phone'];

}
