<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom'=>'required|string|min:4|max:50',
            'prenom'=>'required|string|min:4|max:50',
            'adresse'=>'required|string|min:8|max:255',
            'dateN'=>'required|Date',
            'tel'=>'required|numeric'
        ];
    }
}
