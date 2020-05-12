<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Staffresidents extends Model
{
    protected $fillable = [
    	'id_staffs',
    	'id_residents',
    ];
}
