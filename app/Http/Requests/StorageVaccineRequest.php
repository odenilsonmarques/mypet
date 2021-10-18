<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageVaccineRequest extends FormRequest
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
           'type_vaccine'=>['required'],
           'pet_id'=>['required']
        ];
    }
    public function messages()//funcaão criada para exibir as mensagem
    {
        return[
            'type_vaccine.required'=>'O campo tipo da vacina é obrigatório',
            'pet_id.required'=>'O campo pet é obrigatório'
        ];
    }
}
