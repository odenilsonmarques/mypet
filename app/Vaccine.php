<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Pet;


class Vaccine extends Model
{
    //informando o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;

    //aqui estou chamando o metodo belongTo(pertence a), pois nessa regra de negócio uma vacina está relacionas a pelo meno um pet
    // não é preciso especificar o valor das chavees, pois estou usando o valor padrao do frame nas tabelas, caso naõ estivesse teria que especificar o nome das colunas
    public function pet(){
        return $this->belongsTo(Pet::class);
    }
}



