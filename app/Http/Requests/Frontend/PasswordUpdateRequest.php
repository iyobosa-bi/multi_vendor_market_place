<?php

namespace App\Http\Requests\Frontend;

use App\Service\NotificationService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Illuminate\Validation\Validator;

class PasswordUpdateRequest extends FormRequest
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
        return [
            "current_password"=>['required','min:8','current_password'],
            "new_password"=>['required','different:current_password','confirmed',RulesPassword::min(8)->mixedCase()->numbers()->symbols()->uncompromised()],
        ];
    }

    //add validator

    public function withValidator(Validator $validator)
{
    $validator->after(function (Validator $validator) {
        if ($validator->errors()->any()) {
            foreach ($validator->errors()->all() as $error) {
                NotificationService::errorMessage($error);
            }
        }
    });
}

}
