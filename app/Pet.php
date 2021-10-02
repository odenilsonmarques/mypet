<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    //informando o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;

    //aqui estou chamando o metodo hasmany(tem muitos), pois nessa regra de negócio um pet pode tomar uma ou mais vacina
    public function vaccines(){
        return $this->hasMany(vaccine::class);
    }
}
