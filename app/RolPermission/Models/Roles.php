<?php

namespace App\RolPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
    	'keyCareer',
    	'careerName',
    	'careerStatus',
    ];
}
