<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecurringRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // HACK: Fix to be false from true
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
            'name' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'item name'
        ];
    }
}
