<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'type' => 'required|string',
            'price' => 'required|numeric',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'zipcode' => 'required|string',
            'size' => 'required|numeric',
            'image_path' => 'nullable|url',
            'bedroom' => 'required|integer|min:0',
            'bathroom' => 'required|integer|min:0',
            'garage' => 'required|integer|min:0',
            'office' => 'required|integer|min:0',
            'floors' => 'required|integer|min:0',
            'kitchen' => 'required|integer|min:0',
        ];
    }
    
    public function messages(): array
    {
        return [
            'type.required' => 'The type field is required.',
            'type.string' => 'The type must be a string.',
    
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a number.',
    
            'country.required' => 'The country field is required.',
            'country.string' => 'The country must be a string.',
    
            'state.required' => 'The state field is required.',
            'state.string' => 'The state must be a string.',
    
            'city.required' => 'The city field is required.',
            'city.string' => 'The city must be a string.',
    
            'address.required' => 'The address field is required.',
            'address.string' => 'The address must be a string.',
    
            'zipcode.required' => 'The zipcode field is required.',
            'zipcode.string' => 'The zipcode must be a string.',
    
            'size.required' => 'The size field is required.',
            'size.numeric' => 'The size must be a number.',
    
            'image_path.url' => 'The image path must be a valid URL.',
    
            'bedroom.required' => 'The number of bedrooms is required.',
            'bedroom.integer' => 'The number of bedrooms must be an integer.',
            'bedroom.min' => 'The number of bedrooms cannot be less than 0.',
    
            'bathroom.required' => 'The number of bathrooms is required.',
            'bathroom.integer' => 'The number of bathrooms must be an integer.',
            'bathroom.min' => 'The number of bathrooms cannot be less than 0.',
    
            'garage.required' => 'The number of garages is required.',
            'garage.integer' => 'The number of garages must be an integer.',
            'garage.min' => 'The number of garages cannot be less than 0.',
    
            'office.required' => 'The number of offices is required.',
            'office.integer' => 'The number of offices must be an integer.',
            'office.min' => 'The number of offices cannot be less than 0.',
    
            'floors.required' => 'The number of floors is required.',
            'floors.integer' => 'The number of floors must be an integer.',
            'floors.min' => 'The number of floors cannot be less than 0.',
    
            'kitchen.required' => 'The number of kitchens is required.',
            'kitchen.integer' => 'The number of kitchens must be an integer.',
            'kitchen.min' => 'The number of kitchens cannot be less than 0.',
        ];
    }
}
