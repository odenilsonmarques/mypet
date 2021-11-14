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
    //metodo para listar todos os pets
    public function all(){
        $allPets = Pet::all();
        return view('adminViews.allPets',['allPets'=>$allPets]);
    }

    //Metodo para chamar a view de cadastro
    public function add(){
        return view('adminViews.cadPet');
    }
    /*
    Metodo para realizar o cadastro. Como primeiro parametro chamei o objeto (StoragePetRequest) que foi criado e que também acaba sendo utilizado para 
    tratamento das mensagem de valição. porem poderia ser usado apenas o  (Request), nesse caso teria que usar o objeto validade para validar as mensagem, 
    no entado a ideia é deixar o controller mais enxuto possivel

    obs:o nome desse objeto passado no primeiro parametro deve iniciar com letra maiuscula, uma boa pratica
    é especificar o nome de a cordo com a ação do objeto no caso abaixo strorage(armazena/salva)pet(nome do model)request(refere ao objeto)
    */
    public function addAction(StoragePetRequest $request){
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
        return redirect()->route('allPetsAll')
        //a msg abaixo só será exibida se o processo de cadastro acontecer. Esta mensagem é conhecida como (flash mensage). Está será exibida na pagina que lista os dados do pet, sendo acessada através da funcao session
        ->with('mensagemDeCadastro', 'Pet cadastrado com sucesso!');
    }
    public function edit($id){
        // chamo esse array para capturar o campo escolhido através da logica implementada no form de edição. Poderia ser apenas uma select com options declarados no form de edicão, mas por esse um recurso me permite capturar o campo option selecionado optei por usa-lo, porem deve ter outras formas, essa forma serve para formularios de cadastros... 
        $myPets = ['Cachorro', 'Gato']; 
        $sexPets = ['Macho','Femea'];
        $data = Pet::find($id);
        if($id){
            return view('adminViews.editPet',['data'=>$data,'myPets'=>$myPets,'sexPets'=>$sexPets]);
        }else{
            return redirect()->route('editPetEdite');
        }
    }
    public function editAction(Request $request, $id){

        $name = $request->input('name');
        $breed = $request->input('breed');
        $sex = $request->input('sex');
        $age = $request->input('age');
        $weight = $request->input('weight');
        $description = $request->input('description');
        $type_pet = $request->input('type_pet');

        Pet::find($id)
        ->update(['name'=>$name,'breed'=>$breed,'sex'=>$sex,'age'=>$age,'weight'=>$weight,'description'=>$description, 'type_pet'=>$type_pet]);
        return redirect()->route('allPetsAll')
        //a msg abaixo só exibida se der certo, e é conhecida como (flash mensage), esta será exibida na pagina que lista os os pets, sendo acessada artravés da funcao session
        ->with('mensagemDeEdicao', 'Alteração realizada com sucesso!');
        return redirect()->route('allPetsAll');
    }

    public function delete($id){
        try{
            Pet::find($id)->delete();
            return redirect()->route('allPetsAll');
        }catch(\Exception $e){
            return redirect()->route('allPetsAll')

            ->with('messageError', 'OPS! essa ação não pode ser feita, contate o adminstrador do sistema');
            return redirect()->route('allPetsAll');
        }
    }

}
