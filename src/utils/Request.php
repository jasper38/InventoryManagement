<?php

namespace src\utils;

class Request
{
    public static function all()
    {
        return $_POST;
    }

    public static function input($key, $default = null)
    {
        return $_POST[$key] ?? $default;
    }

    public static function validate($rules)
    {
        $errors = [];

        foreach ($rules as $field => $ruleSet) {
            $rulesArray = explode('|', $ruleSet);
            $value = self::input($field);

            foreach ($rulesArray as $rule) {
                if ($rule === 'required' && empty($value)) {
                    $errors[$field] = "$field is required.";
                } elseif ($rule === 'numeric' && !is_numeric($value)) {
                    $errors[$field] = "$field must be a number.";
                } elseif ($rule === 'integer' && !filter_var($value, FILTER_VALIDATE_INT)) {
                    $errors[$field] = "$field must be an integer.";
                }
            }
        }

        return $errors;
    }
}

