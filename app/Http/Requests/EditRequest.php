<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\User;

class EditRequest extends FormRequest
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
    public function rules(User $user , Request $request)


    {



        return [
            'name' => 'required|min:3',
            'password' => 'required|min:6',
            'email' => 'required|email|',


        ];
    }




    public function messages()
    {

        return [
            'name.required' => "O Nome é obrigatório",
            'name.min' => "O campo nome precisa ter 3 caracteres no minimo",
            'password.required' => "O Password é obrigatório",
            'password.min' => "A senha Precisa ter 6 caracteres no minimo",
            'email.required' => "O Email é obrigatório",
            'email.email' => "O Campo precisa ser um email",
            'email.unique' => "O Email Ja consta no banco de dados",

        ];
    }
}
