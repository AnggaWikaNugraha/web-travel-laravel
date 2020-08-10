<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // exists:travel_packages,id untuk masuk kedalam tabel travel packages
            'travel_packages_id' => 'required|integer|exists:travel_packages,id',
            'image' => 'required|image'
        ];
    }
}
