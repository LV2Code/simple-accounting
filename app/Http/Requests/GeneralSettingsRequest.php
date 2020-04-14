<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingsRequest extends FormRequest
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
        $this->redirect = url()->previous() . '#general';

        return [
            'company_name' => 'required|min:3',
            'street' => 'required|min:3',
            'city' => 'required|min:3',
            'state' => 'required|min:2',
            'zip_code' => 'required|min:5',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'company_address' => json_encode([
                'city' => $this->city,
                'state' => $this->state,
                'street' => $this->street,
                'country' => $this->country,
                'zip_code' => $this->zip_code
            ])
        ]);
    }
}
