<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'description' => 'required',
            ];
            if ($this->getMethod() == 'POST') {
            $rules += ['image' => 'required |image|mimes:jpeg,png,jpg,gif,svg'];
            }
            else{
            
            $rules += ['image' => 'image|mimes:jpeg,png,jpg,gif,svg'];
            }
            return $rules;
    }
}
