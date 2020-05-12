<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    protected $fillable = [
    	'residentRegistration',
    	'nameResident',
    	'firtsLastnameResident',
    	'secondLastnameResident',
    	'emailResident',
    	'passwordResident',
    	'phoneResident',
    	'periodResident',
    	'id_careers',
    	'id_typesafes',
    	'id_semesters',
    	'id_studiesplans',
    	'id_relatives',
    	'id_typeBeca',
    ];
}
