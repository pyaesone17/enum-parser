<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Enums\ExperienceLevel;

class ExperienceLevelValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $keys = ExperienceLevel::getKeys();

        return in_array($value, $keys);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The experience level should be '.implode(',', ExperienceLevel::getKeys());
    }
}
