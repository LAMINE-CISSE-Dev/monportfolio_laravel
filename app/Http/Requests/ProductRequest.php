<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'projets' => 'required|min:5',
            'description' => 'required|max:50',
            'image' => 'required|image',
            'lien' => 'required',
          
        ];
    }

    public function messages()
    {
        return[
            
                'projets.required' => 'le nom du produit est obligatoire',
                'projets.min' => 'le nom du produit doit avoir au moins 5 caracteres',
                'image.required' => 'le fichier du produit est obligatoire',
                'lien.required' => 'le lien est obligatoire',
                'description.required' => 'la description du produit est obligatoire',
             
        ];
    }
}
