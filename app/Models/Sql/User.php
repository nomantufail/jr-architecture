<?php

namespace App\Models\Sql;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'f_name', 'l_name',  'password', 'email', 'country_id', 'membership_plan_id'
    ];
}
