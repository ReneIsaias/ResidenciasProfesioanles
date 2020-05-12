<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $fillable = [
    	'keyStaff',
    	'nameStaff',
    	'firstLastname',
    	'secondLastname',
    	'emailStaff',
    	'passwordStaff',
    	'phoneStaff',
    	'statusStaff',
    	'id_posts',
    	'id_degreestudies',
    	'id_careers',
    ];
}
