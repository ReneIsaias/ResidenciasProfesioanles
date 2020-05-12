<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Semesters extends Model
{
    protected $fillable = [
    	'nameSemester',
    	'statusSemester',
    ];
}
