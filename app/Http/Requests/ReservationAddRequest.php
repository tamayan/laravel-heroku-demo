<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationAddRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'lastName' => 'required|max:20',
            'firstName' => 'required|max:20',
            'email' => 'required|email:rfc',
            'phone' => 'required|digits_between:8,11',
            'checkin' => 'required',
            'days' => 'required|integer',
            'room' => 'required|integer',
            'type' => 'required',
            'count' => 'required|integer'
        ];
    }
}
