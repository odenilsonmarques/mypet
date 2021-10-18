<?php

/*
1º precisei chamar na primeira linha o diretorio adminController, pois dentro dele é que está o
controle que foi criado.

2º precisei importar a classe controller, pois a partir do momento que chamo ao diretorio adminController na primeira linha essa 
primeira linha vai procurar pelo controller criado e não mais pela classe controle por isso é preciso importala 

3º é preciso importar o model a ser utilizado nesse controlller
*/

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoragePetRequest;
use App\Pet;

class PetController extends Controller
{
    //Metodo para chamar a view de cadastro
    public function cadastrarPet(){
        return view('adminViews.cadastroPet');
    }

    /*
    Metodo para realizar o cadastro. Como primeiro parametro chamei o objeto (StoragePetRequest) que foi criado e que também acaba sendo utilizado para 
    tratamento das mensagem de valição. porem poderia ser usado apenas o  (Request), nesse caso teria que usar o objeto validade para validar as mensagem, 
    no entado a ideia é deixar o controller mais enxuto possivel

    obs:o nome desse objeto passado no primeiro parametro deve iniciar com letra maiuscula, uma boa pratica
    é especificar o nome de a cordo com a ação do objeto no caso abaixo strorage(armazena/salva)pet(nome do model)request(refere ao objeto)
    */
    public function cadastrarPetAction(StoragePetRequest $request){
        
        $name = $request->input('name');
        $breed = $request->input('breed');
        $sex = $request->input('sex');
        $age = $request->input('age');
        $weight = $request->input('weight');
        $description = $request->input('description');
        $type_pet = $request->input('type_pet');

        $pet = new Pet();
        $pet->name = $name;
        $pet->breed = $breed;
        $pet->sex = $sex;
        $pet->age = $age;
        $pet->weight = $weight;
        $pet->description = $description;
        $pet->type_pet = $type_pet;

        $pet->save();

        return redirect()->route('exibeDados');
        

    }
}
