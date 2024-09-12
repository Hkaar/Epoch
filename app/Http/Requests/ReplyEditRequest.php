<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class ReplyEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (Gate::allows('admin')) {
            return [
                'user_id' => 'nullable|numeric|exists:users,id',
                'comment_id' => 'nullable|numeric|exists:comments,id',
                'content' => 'nullable|string',
            ];
        }

        return [
            'content' => 'nullable|string',
        ];
    }
}
