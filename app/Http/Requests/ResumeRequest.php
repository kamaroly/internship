<?php

namespace App\Http\Requests;

use Sentry;
use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Sentry::getUser();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =  [
            'title'  => 'required',
            'resume' => 'required', 
            'file'   => 'required',
        ];

        // If we are updating, do not validate
        // the file because it is already
        // in the database
        if ($this->has('resume_id')) {
            unset($rules['file']);
        }

        return $rules;
    }
}
