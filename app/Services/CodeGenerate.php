<?php

namespace App\Services;

class CodeGeretor{

    public static function codeRfk()
    {
        // $lenght= 100;
        // $keys = substr(str_shuffle(
        //     str_repeat($x = 'abcdefghijklmnopqrstuvwxyz1234567890', ceil($lenght / strlen($x)))
        // ), 3, $lenght);

        $lenght = 200;
        $keys = substr(str_shuffle(
            str_repeat($n = 'abcdefghijklmnopqrstuvwxyz1234567890?!$^=~+-*/', ceil($lenght / strlen($n)))
        ), 2, $lenght);

        return $keys;
    }
}