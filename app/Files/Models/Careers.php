<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $fillable = [
    	'keyCareer',
    	'careerName',
    	'careerStatus',
    ];
}
