<?php

namespace Chronos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() 
    {
        return [
            'name'=>'required|max:50',
            'description'=>'required|max:100',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'O campo nome é obrigatório !',
            'name.max' => 'O campo nome não pode ter mais de 50 caracteres !',
            'description.required' => 'O campo descrição é obrigatório !',
            'description.max' => 'O campo descrição não pode ter mais de 100 caracteres !',
        ];
    }
}
