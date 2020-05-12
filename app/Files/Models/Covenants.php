<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Covenants extends Model
{
    protected $fillable = [
    	'convenant',
    	'descriptionConvenant',
    	'statusConvenant',
    ];
}
