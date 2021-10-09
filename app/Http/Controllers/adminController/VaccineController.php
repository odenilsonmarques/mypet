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
        $allPet = Pet::all();
        return view('adminViews.cadastroVaccine',['pet'=>$allPet]);
    }

    public function cadastrarVaccineAction(Request $request){
        $type_vaccine = $request->input('type_vaccine');
        $date_vaccine = $request->input('date_vaccine');
        $number_dosage = $request->input('number_dosage');
        $pet = $request->input('pet_id');//variavel $pet recebendo o valor da coluna id da tabela pet

        $vaccine = new Vaccine();
        $vaccine-> type_vaccine = $type_vaccine;
        $vaccine->date_vaccine = $date_vaccine;
        $vaccine->number_dosage = $number_dosage;
        $vaccine->pet_id = $pet;
        $vaccine->save();
    }

}
