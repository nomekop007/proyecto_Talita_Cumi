<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
  protected $fillable = [
        'tituloEvento','descripcionEvento','URLfoto','fechaInicio','fechaFin',
    ];
}
