<?php

namespace Chronos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleFormRequest extends FormRequest
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
            'name'=>'required|unique:roles|max:30',
            'description' => 'required|max:100',
            'permissions' =>'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'O campo nome é obrigatório !',
            'name.max' => 'O campo nome não pode ter mais de 30 caracteres !',
            'description.required' => 'O campo descrição é obrigatório !',
            'description.max' => 'O campo descrição não pode ter mais de 100 caracteres !',
            'permissions.required' => 'A permissão é obrigatória !',
        ];
    }
}
