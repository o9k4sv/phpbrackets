<?php

namespace O9k4sv\Phpbrackets\Functions;

function checkBrackets($string)
{
    $stack = array();
    $chars = str_split($string);

    foreach ($chars as $ch) {
        switch ($ch) {
            case '(':
                $stack[] = $ch;
                break;
            case ')':
                if (empty($stack)) {
                    return false;
                }
                array_pop($stack);
                break;
        }
    }

    return empty($stack);
}
