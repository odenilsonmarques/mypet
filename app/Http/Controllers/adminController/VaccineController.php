<?php

namespace App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vaccine;
use App\Pet;

class VaccineController extends Controller
{
    //Metodo para chamar a view de cadastro, aqui também é chamado a classe Pet junto do metodo all para busca todos os pet e lista na view cadastroVaccine 
    public function cadastrarVaccine(){
        $pet = Pet::all();
        return view('adminViews.cadastroVaccine',['pet'=>$pet]);
    }

    public function cadastrarVaccineAction(Request $request){
        
    }

}
