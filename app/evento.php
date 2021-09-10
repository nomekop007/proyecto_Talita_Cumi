<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class evento extends Model
{
  protected $fillable = [
        'tituloEvento','descripcionEvento','URLfoto','estado','fecha','ubicacion','creator',
    ];

/*
    protected $dates = [
    	'fechaInicio','fechaFin',];
*/

   public function getfechaAttribute($date){
    	return new Date($date);
    }

}
