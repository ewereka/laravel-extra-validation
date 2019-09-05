<?php

// Namespace
namespace Ewereka\Validation\Rules;

// US Phone Number rule
class USPhoneNumber extends Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * The telephone number must be 10 characters in length,
     * and comprised entirely of integers.
     *
     * @param string $attribute.
     * @param mixed $value.
     * @return bool.
     *
     **/
    public function passes($attribute, $value)
    {
        return preg_match("/^[0-9]{10}$/", $value);
    }



    /**
     * Get the validation error message.
     *
     * @param none.
     * @return string.
     *
     **/
    public function message()
    {
        return Helper::getLocalizedErrorMessage(
            'us_phone_number',
            'The :attribute must be a valid United States telephone number (10 digits in length)'
        );
    }

}