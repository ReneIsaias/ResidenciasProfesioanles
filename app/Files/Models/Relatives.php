<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Relatives extends Model
{
    protected $fillable = [
    	'nameRelative',
    	'firstLastname',
    	'secondLastname',
    	'phoneRelative',
    	'addresRelative',
    	'id_typefamily',
    ];
}
