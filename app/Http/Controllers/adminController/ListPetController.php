<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pet;
use App\Vaccine;

class ListPetController extends Controller
{
    //usando o metodo with para buscar as informações relacionadas 
    //o nome pet passado apos o método with refere-se ao nome do metodo declarado no medel vaccine
    public function list(){
        $pets = Vaccine::with('pet')->get();
        return view('adminViews.walletPet',['pets'=>$pets]);
        // dd($pets);
    }

    //metodo para listar todos os pets
    public function all(){
        $allPets = Pet::all();
        return view('adminViews.allPets',['allPets'=>$allPets]);

    }

}
