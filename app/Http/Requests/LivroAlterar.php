<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Livro;

class LivroAlterar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $livro = Livro::find($this->id);        
        return $livro && $this->user()->can('atualizar-livro', $livro);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required',
            'autor' => 'required',
        ];
    }

    public function messages()
{
    return [
        'titulo.required' => 'Campo Titulo não pode ser vazio!',
        'autor.required'  => 'Campo Autor não pode ser vazio!'
    ];
}
}
