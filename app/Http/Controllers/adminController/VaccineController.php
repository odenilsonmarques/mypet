<?php

namespace App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorageVaccineRequest;
use Illuminate\Http\Request;
use App\Vaccine;
use App\Pet;

class VaccineController extends Controller
{

    public function all(){
        $allVaccines = Vaccine::all();
        return view('adminViews.allVaccine',['allVaccines'=>$allVaccines]);
    }

    //Metodo para chamar a view de cadastro, aqui também é chamado a classe Pet junto do metodo all para busca todos os pet e lista na view cadastroVaccine 
    public function add(){
        $myPets = ['antirrábica', 'giardíase', 'gripe canina', 'leishmaniose', 'múltipla ou polivalente', 'Tosse dos canis', 'V3 felina', 'V4 felina', 'V5 felina', 'vacina V8', 'vacina V10'];// esse array foi declarado aqui para ser usado na pagina de cadastro de pet no campo select, essa forma facilita no momento que for carregado os dados no formulario de edição. poderia ser feito de outra forma
        $allPet = Pet::all();
        return view('adminViews.cadVaccine',['pet'=>$allPet]);
    }

    public function addAction(StorageVaccineRequest $request){
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
        return redirect()->route('allVaccinesAll')
        //a msg abaixo só será exibida se o processo de cadastro acontecer. Esta mensagem é conhecida como (flash mensage). Está será exibida na pagina que lista os dados do pet, sendo acessada através da funcao session
        ->with('messageCad', 'Vacina cadastrada com sucesso!');
    }

    public function edit($id){
        $listAllVaccines = ['antirrábica','giardíase','gripe canina','leishmaniose','múltipla ou polivalente','Tosse dos canis','V3 felina','V4 felina','V5 felina','vacina V8','vacina V10'];
        $data = Vaccine::find($id);
        if($data){
            return view('adminViews.editVaccine',['data'=>$data,'listAllVaccines'=>$listAllVaccines]);
        }else{
            return redirect()->route('allVaccinesAll');
        }
    }
    public function editAction(Request $request, $id){
        $type_vaccine = $request->input('type_vaccine');
        $date_vaccine = $request->input('date_vaccine');
        $number_dosage = $request->input('number_dosage');

        Vaccine::find($id)
        ->update(['type_vaccine'=>$type_vaccine,'date_vaccine'=>$date_vaccine,'number_dosage'=>$number_dosage]);
        return redirect()->route('allVaccinesAll')
         //a msg abaixo só exibida se der certo, e é conhecida como (flash mensage), esta será exibida na pagina que lista os os pets, sendo acessada artravés da funcao session
         ->with('messageEdit', 'Alteração realizada com sucesso!');
         return redirect()->route('allVaccinesAll');
    }


    public function delete($id){
        try{
            Vaccine::find($id)->delete();
            return redirect()->route('allVaccinesAll');
        }catch(\Exception $e){
            return redirect()->route('allVaccinesAll')
            ->with('messageError', 'ação realizada com sucesso!');
            return redirect()->route('allVaccinesAll');
        }
    }
}
