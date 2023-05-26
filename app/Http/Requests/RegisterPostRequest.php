<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'nom' => 'required',
            'prenom' => 'required',
            'password' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'L\'adresse mail est obligatoire.',
            'email.email' => 'Vous devez saisir une adresse mail correct.',
            'email.unique' => 'Cette adresse mail existe déjà',
            'nom.required' => 'Vous devez saisir votre nom.',
            'prenom.required' => 'Vous devez saisir votre prénom.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Votre mot de passe doit être supérieur ou égal à 5 caractères.',
        ];
    }

}
