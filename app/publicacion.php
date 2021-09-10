<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
     protected $fillable = [
        'tituloPublicacion','descripcionPublicacion','URLpublicacion','estado','tipo','categoria','precio','creator',
    ];
}
