<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FastEventRequest extends FormRequest
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
        return [
            'title' => 'required|min:3',
            'start' => 'date_format:H:i:s|before:end',
            'end' => 'date_format:H:i:s|after:start'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title field is required',
            'title.min' => 'Title needs at least three characters',
            'start.date_format' => 'Please enter a start valid time',
            'start.before' => 'The start time must be less than the end time',
            'end.date_format' => 'Please enter a valid end time',
            'end.after' => 'The end time must be more than the start time',
        ];
    }
}
