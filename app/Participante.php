<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //
    //Relacion con Usuario 
    public function evento(){
        return $this->belongsTo(Evento::class);
    }
}
