<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TecnicoRequest extends FormRequest
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
            'nome' => 'required|max:50',
            'email' => 'required|max:60',
            'cpf' => 'required|numeric|max:11',
            'cidade' => 'max:50',
            'bairro' => 'max:50',
            'rua' => 'max:50',
            'telefone1' => 'required|max:15',
            'telefone2' => 'max:15',
            'observacao' => 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'O campo :attribute não pode ser vazio.',
            'telefone1.required' => 'O campo Telefone 1 não pode ser vazio.',
            'min'       => 'O campo :attribute precisa ter no mínimo :min caracteres.',
            'max'       => 'O campo :attribute não pode passar de :max caracteres.',
            'observacao.max'       => 'O campo Observação não pode passar de :max caracteres.'
        ];
    }


}
