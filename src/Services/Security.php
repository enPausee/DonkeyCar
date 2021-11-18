<?php 
namespace App\Services;

class Security {

    const LENGTH_MINIMAL = 3;
    const LENGTH_MINIMAL_PASSWORD = 8;
    const LENGTH_MAXIMAL = 255;

    public static function not_empty($fields = [])
    {
        if (count($fields) != 0) {
            foreach ($fields as $field) {
                if (empty($_POST[$field]) || trim($_POST[$field]) == "") {
                    return false;
                }
            }

            return true;
        }
    }

    public static function test_input(string $data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
    
    public static function validateEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validatePhone(string $phone)
    {
        return preg_match("%^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$%",$phone);
    }

    public static function validateLength(string $str)
    {
        return self::LENGTH_MINIMAL <= mb_strlen($str) && mb_strlen($str)<= self::LENGTH_MAXIMAL;
    }

    public static function validateLengthPassword(string $str)
    {
        return self::LENGTH_MINIMAL_PASSWORD <= mb_strlen($str) && mb_strlen($str)<= self::LENGTH_MAXIMAL;
    }
}