<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
    	'keyProject',
    	'nameProject',
    	'descriptionProject',
    	'objetivesProject',
    	'dateStart',
    	'dateEnd',
    	'qualificationProject',
    	'revisionProject',
    	'dateRevision',
    	'hourlyProject',
    	'dateRealRevicion',
    	'id_situationprojects',
    	'id_reports',
    	'id_businesses',
    	'id_residents',
    ];
}
