<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UpperCase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // $value é o valor do campo que está sendo validado
        // $attribute é o nome do campo que está sendo validado
        // $fail é uma função que deve ser chamada se a validação falhar 

        if (strtoupper($value) !== $value) {
            $fail("O campo {$attribute} deve estar em letras maiúsculas.");
        }
    }
}