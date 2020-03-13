<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //Relacion con Usuario 
    public function usuario(){
        return $this->belongsTo(user::class);
    }

    //Relacion con Participante 
    public function participantes(){
        return $this->hasMany(Participante::class);
    }

}
