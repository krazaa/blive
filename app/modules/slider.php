<?php

namespace App\modules;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $fillable =  [ 'title', 'description', 'slider' ];
}
