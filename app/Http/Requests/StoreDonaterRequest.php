<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class StoreDonaterRequest extends FormRequest
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
            'name' => 'required|max:255',
            'second_name' => 'required',
            'cep' => 'required',
            'address' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'contact' => 'required',
        ];
    }

    /**
     * Mensagens persolnalizadas para as validações
     *
     * @return array
     */
    public function messages()
    {
        return [
            'cpf_cnpj.unique' => 'CPF ou CNPJ já registrado',
        ];
    }

    /**
     * Retorna os erros encontrados
     *
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}