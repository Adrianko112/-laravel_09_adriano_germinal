<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'name' => 'required|min:3|max:255',
           'description' => 'required|min:10',
           'price' => 'required|numeric|min:0',
           'img' => 'required|image',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il nome del servizio è obbligatorio.',
            'name.min' => 'Il nome del servizio deve avere almeno :min caratteri.',
            'name.max' => 'Il nome del servizio non può superare :max caratteri.',
            'description.required' => 'La descrizione del servizio è obbligatoria.',
            'description.min' => 'La descrizione del servizio deve avere almeno :min caratteri.',
            'price.required' => 'Il prezzo del servizio è obbligatorio.',
            'price.numeric' => 'Il prezzo del servizio deve essere un numero.',
            'price.min' => 'Il prezzo del servizio deve essere almeno :min.',
            'img.required' => 'L\'immagine del servizio è obbligatoria.',
            'img.image' => 'Il file caricato deve essere un\'immagine.',
        ];
    }
}
