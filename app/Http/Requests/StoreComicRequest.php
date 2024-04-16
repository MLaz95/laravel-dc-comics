<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'nullable|max:5000',
            'thumb' => 'nullable|max:1000',
            'price' => 'required|decimal:2',
            'series' => 'nullable|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }

    public function messages(): array {
        return [
            'required' => "Il campo :attribute è obbligatorio",
            'max' => 'Il campo :attribute non può avere più di :max caratteri',
            'price.decimal' => 'Il campo price deve essere espresso nel sequente formato 0.00',
            'sale_date' => 'Il campo date deve essere una data valida'
        ];
    }
}


