<?php

namespace App\modules;

use Illuminate\Database\Eloquent\Model;

class Fpvideos extends Model
{
     protected $fillable =  [ 'title', 'description', 'ytlink' ];
}
