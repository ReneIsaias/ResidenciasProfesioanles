<?php

namespace App\RolPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = [
    	'namePermission',
    	'slugPermission',
    	'descriptionPermission',
    	'statusPermission',
    ];
}
