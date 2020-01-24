<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class evento extends Model
{
  protected $fillable = [
        'tituloEvento','descripcionEvento','URLfoto','estado','fechaInicio','fechaFin',
    ];

/*
    protected $dates = [
    	'fechaInicio','fechaFin',];
*/

   public function getfechaInicioAttribute($date){
    	return new Date($date);
    }
    public function getfechaFinAttribute($date){
    	return new Date($date);
    }
}
