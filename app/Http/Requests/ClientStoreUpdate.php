<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreUpdate extends FormRequest
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
        $id = $this->segment(2);

        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', "unique:clients,email,{$id},id"],
            'image' => ['required', 'image'],
            'type_client_id' => ['required']
        ];
    }
}
