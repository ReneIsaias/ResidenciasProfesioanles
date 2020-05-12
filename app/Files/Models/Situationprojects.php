<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Situationprojects extends Model
{
    protected $fillable = [
    	'projectSituation',
    	'descriptionSituation',
    	'statusSituation',
    ];
}
