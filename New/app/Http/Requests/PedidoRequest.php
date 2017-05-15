<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoRequest extends FormRequest
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
            'defeito' => 'required|max:255',
            'valor' => 'numeric',
            'produto' => 'required|max:100',
            'funcionario_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'O campo :attribute não pode ser vazio.',
            'max'       => 'O campo :attribute não pode passar de :max caracteres.',
        ];
    }
}
