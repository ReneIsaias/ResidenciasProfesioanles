<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Turns extends Model
{
    protected $fillable = [
    	'descriptionTurn',
    	'statusTurn',
    ];
}
