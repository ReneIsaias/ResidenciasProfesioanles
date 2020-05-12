<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Studiesplans extends Model
{
    protected $fillable = [
    	'planStudies',
    	'descriptionPlan',
    	'planDate',
    	'planStatus',
    ];
}
