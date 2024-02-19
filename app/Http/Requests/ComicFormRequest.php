<?php

namespace App\Http\Requests;

use Faker\Core\Barcode;
use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
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
            'title' => 'required|string|min:5|max:30',
            'release' => 'required|date|',
            'price' => '|numeric|',
            'barcode' => 'required|numeric|min:8|max:15|unique:comics',
            'availability' => 'numeric|nullable',
        ];
    }
    public function messages() {
        return[
            'title.required' => "il titolo è obbligatorio",
            'title.min' => "il titolo deve contenere almeno 5 caratteri",
            'release.required' => "la data è richiesta",
            'price.numeric' => "il prezzo è richiesto e deve essere un numero",
            'barcode.required' => "il codice è obbligatorio",
            'barcode.unique' => "2 codice a barre uguali non sono accettati",
            'barcode.numeric' => "il codice a barre deve essere un numero",
            'barcode.min' => "il codice a barre deve avere almeno 8 numeri",
            'availability'=> "la disponibilità deve contenere un numero"
        ];
        
    }
}
