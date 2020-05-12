<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $fillable = [
    	'nameReport',
    	'descriptionReport',
    	'statusReport',
    	'id_typeFile',
    ];
}
