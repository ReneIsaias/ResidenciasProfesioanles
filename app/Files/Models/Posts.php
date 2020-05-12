<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
    	'namePost',
    	'descriptionPost',
    	'statusPost',
    ];
}
