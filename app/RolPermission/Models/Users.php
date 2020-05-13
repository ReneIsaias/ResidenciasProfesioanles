<?php

namespace App\RolPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
    	'nameUser',
    	'emailUser',
		'email_verified_at',
		'password',
	];
	
	protected $hidden = [
        'password',// 'remember_token',
    ];
}
