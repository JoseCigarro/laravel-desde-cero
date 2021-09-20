<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
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
            'title' => 'required',
            'slug' => [
                'required',
                Rule::unique('projects')->ignore($this->route('project')),
            ],
            'description' => 'required',
            'image' => ['required', 'image'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => __('O campo titúlo não é válido'),
            'title.slug' => __('O campo Slug não é válido'),
            'title.description' => __('O campo Descrição não é válido'),
        ];
    }
}
