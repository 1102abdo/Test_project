<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [ 
            'name'   =>     'required|string',
            'position'   =>     'required|string',
            'image'   =>     'nullable|mimes:jpg,png',
            'facebook'   =>     'nullable|string',
            'twitter'   =>     'nullable|string',
            'linkedin'   =>     'nullable|string',
        ];
    }
    public function attributes(): array
    {
        return [
            'name'   =>__("keywords.name"),
            'position'   =>__("keywords.position"),
            'image'   =>__("keywords.image"),
            'facebook'   =>__("keywords.facebook"),
            'twitter'   =>__("keywords.twitter"),
            'linkedin'   =>__("keywords.linkedin"),
             
        ];
    }
}
