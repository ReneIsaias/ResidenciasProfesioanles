<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Projectstaffs extends Model
{
    protected $fillable = [
    	'calification',
    	'descriptionCalification',
    	'id_projects',
    	'id_staffs',
    	'id_situationprojects',
    ];
}
