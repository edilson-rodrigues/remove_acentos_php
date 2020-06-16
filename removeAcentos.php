<?php

function removeacentos($value)
{
// assume $str esteja em UTF-8
    $map = array(
        'á' => 'a',
        'à' => 'a',
        'ã' => 'a',
        'â' => 'a',
        'ä' => 'a',

        'Á' => 'A',
        'À' => 'A',
        'Ã' => 'A',
        'Â' => 'A',
        'Ä' => 'A',

        'é' => 'e',
        'ê' => 'e',
        'è' => 'e',
        'ë' => 'e',

        'É' => 'E',
        'Ê' => 'E',
        'È' => 'E',
        'Ë' => 'E',

        'í' => 'i',
        'ì' => 'i',
        'î' => 'i',
        'ï' => 'i',

        'Í' => 'I',
        'Ì' => 'I',
        'Î' => 'I',
        'Ï' => 'I',


        'ó' => 'o',
        'ô' => 'o',
        'õ' => 'o',
        'ò' => 'o',
        'ö' => 'o',

        'Ó' => 'O',
        'Ô' => 'O',
        'Õ' => 'O',
        'Ò' => 'O',
        'Ö' => 'O',

        'ú' => 'u',
        'ü' => 'u',
        'ù' => 'u',
        'û' => 'u',

        'Ú' => 'U',
        'Ü' => 'U',
        'Ù' => 'U',
        'Û' => 'U',

        'ñ' => 'n',
        'Ñ' => 'N',

        'ç' => 'c',
        'Ç' => 'C'
    );

    $value = strtr($value, $map);
    return strtoupper($value);
}