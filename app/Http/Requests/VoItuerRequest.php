<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoituerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // يجب أن يكون true للسماح بالتحقق
    }

    public function rules(): array
    {
        return [
            'marque' => 'required|string|max:255',
            'image'  => 'required|image|mimes:png,jpg',
            'modele' => 'required|string|max:255',
            'version' => 'nullable|string|max:255',
            'annee' => 'required|integer|min:1900|max:' . date('Y'),
            'carburant' => 'required|string',
            'transmission' => 'required|string',
            'kilometrage' => 'required|integer|min:0',
            'moteur' => 'nullable|numeric|min:0',
            'prix' => 'required|integer|min:0',
            'neuve' => 'required|boolean',
            'localisation' => 'required|string|max:255',
            'description' => 'nullable|string',
        ];
    }
}