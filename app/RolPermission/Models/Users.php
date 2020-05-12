<?php

namespace App\RolPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
    	'keyCareer',
    	'careerName',
    	'careerStatus',
    ];
}
