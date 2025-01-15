<?php

namespace App\helpers;

class Common
{
    public static function validateEmail(string $email): bool
    {
        if (strpos($email, '@') !== false && strpos($email, '.', strpos($email, '@')) !== false && strpos($email, ' ') === false) {
            return true;
        }

        return false;
    }

    public static function formated($string) 
    {
        $string = trim($string);

        $string = strtolower($string);

        $string = str_replace(' ', '-', $string);

        return $string;
    }

    public static function calculate(string $type, float $a, float $b)
    {
        // Garantir que o tipo seja válido
        $validTypes = ['sum', 'subtract', 'multiply', 'divide'];
        
        if (!in_array($type, $validTypes)) {
            return "Invalid type";
        }

        // Processamento da operação
        switch ($type) {
            case 'sum':
                return $a + $b;
            case 'subtract':
                return $a - $b;
            case 'multiply':
                return $a * $b;
            case 'divide':
                return $b !== 0 ? $a / $b : "Cannot divide by zero";
        }
    }
}