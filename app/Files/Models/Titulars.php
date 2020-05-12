<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Titulars extends Model
{
    protected $fillable = [
    	'nameTitular',
    	'firstLastname',
    	'secondLastname',
    	'phoneTitular',
    	'id_post',
    ];
}
