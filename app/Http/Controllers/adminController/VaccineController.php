<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\vaccine;
use App\Pet;

class VaccineController extends Controller
{
    //Metodo para chamar a view de cadastro
    public function cadastrarVaccine(){
        return view('adminViews.cadastroVaccine');
    }

    public function cadastrarVacineAction(){

    }

}
