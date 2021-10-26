<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pet;
use App\Vaccine;

class ListPetController extends Controller
{
    // public function list(){
    //     $pets = Pet::all();
    //     return view('adminViews.listPet',['pets'=>$pets]);
    // }

    public function list(){
        $pets = Vaccine::with('pet')->get();
        return view('adminViews.listPet',['pets'=>$pets]);

        // dd($pets);
    }

    // public function list(){
    //     $result = Pet::with('vaccines')->get();

    //     dd($result);
    // }
}
