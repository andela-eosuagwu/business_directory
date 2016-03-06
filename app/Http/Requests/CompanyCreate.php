<?php

namespace App\Http\Requests;
use Auth;
use App\Http\Requests\Request;

class CompanyCreate extends Request
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
            'name' => 'required',
            'email' => 'required|unique:companies',
            'location' => 'required',
            'image' => 'required'
        ];
    }
}
