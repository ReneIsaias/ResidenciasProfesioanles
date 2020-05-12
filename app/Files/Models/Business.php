<?php

namespace App\Files\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'rfcBusiness',
        'nameBusiness',
        'emailBusiness',
        'misionBusiness',
        'addresBusiness',
        'phoneBusiness',
        'cpBusiness',
        'statusBusines',
        'id_titulars',
        'id_staffs',
        'id_covenant',
        'id_turns',
        'id_sectors',
    ];
}
