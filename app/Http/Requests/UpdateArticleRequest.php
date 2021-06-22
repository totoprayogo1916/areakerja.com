<?php

namespace App\Http\Requests;

use App\Article;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'judul'        => [
                'required',
            ],
            'ringkasan'   => [
                'required',
            ],
            'content'  => [
                'required',
            ],
            'gambar'       => [
                'required',
            ],
        ];
    }
}
