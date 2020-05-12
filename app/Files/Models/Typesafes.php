<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Typesafes extends Model
{
    protected $fillable = [
    	'safeName',
    	'descriptionSafe',
    	'statusSafe',
    ];
}
