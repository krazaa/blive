<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guard = 'members';
    protected $table = 'users';
    protected $guarded = []; 


    public function scopeisMember($query)
    {
        return $query->where('membertype', false);
    }
}
