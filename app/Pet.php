<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Vaccine;//linha opcional


class Pet extends Model
{
    //informando o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;

    protected $fillable = ['name','breed','sex','age','weight','description','type_pet'];

    //aqui estou chamando o metodo hasmany(tem muitos), pois nessa regra de negócio um pet pode tomar uma ou mais vacina
    public function vaccines(){
        return $this->hasMany(Vaccine::class);
    }
}
