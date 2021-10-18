<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoragePetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //por default ele vem false, mas como a ideia é permitir o armazenamento/salvar troquei para true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           //a validacao abaixo poderia ser separada por uma barra, porem é apenas uma outra forma de fazer. No meu caso, preferir usar um array
           'name'=>['required','string','min:3','max:30'],
           'type_pet'=>['required'],
           'sex'=>['required']
        ];
    }
    public function messages() //funcaão criada para exibir as mensagem
    {
        return [
            'name.required'=>'O campo nome é obrigatório',
            'name.min'=>'O campo nome deve ter no mínimo 3 caractres',
            'name.max'=>'O campo nome deve ter no maximo 30 caractres',
            'type_pet.required'=>'O campo pet é obrigatório',
            'sex.required'=>'O campo sexo é obrigatório'
        ];
    }
}
