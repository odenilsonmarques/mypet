<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    //informando o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;

    //aqui estou chamando o metodo belongTo(pertence a), pois nessa regra de negócio uma vacina está relacionas a pelo meno um pet
       public function pets(){
        return $this->belongTo(Pet::class);
    }
}



