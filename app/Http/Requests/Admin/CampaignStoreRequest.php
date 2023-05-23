<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CampaignStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
            ],
            'slug' => [
                'nullable',
                'alpha_dash',
                'unique:campaigns,slug',
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'funds' => [
                'nullable',
                'numeric',
            ],
            'closed_at' => [
                'nullable',
                'date',
            ],
            'publish' => [
                'nullable',
                'boolean',
            ],
            'cover' => [
                'required',
                'image',
            ],
            'unique_code_sufix' => [
                'nullable',
                'numeric',
                'max:999',
            ],
        ];
    }

    public function validation()
    {
        $data = parent::validated();

        $data['published_at'] = $this->get('publish') == 1 ? now() : null;

        if (isset($data['closed_at'])) {
            $data['closed_at'] .= ' 23:59:59';
        }

        unset(
            $data['publish'],
            $data['cover']
        );

        return $data;
    }
}
