<?php declare(strict_types=1);
/**
 * Reverse Number or String
 * A number can be written in reverse order.
 * For example
 * 12345 = 54321
 * A string can be written in reverse order.
 * for example
 * shagun = nugahs
 * india = aidni
 */

# reverse number/string function
function  reverseOrder(string|int $input): string|int
{
    // If the input is string
    if(! is_numeric($input)){
        $input = trim($input);
        $length = strlen($input);
        $reverse = '';
        for($i=$length-1; $i >= 0; $i--){
            $reverse .= $input[$i]; 
        }
        return $reverse;
    }
    // If the input is numeric
    $temp = $input;
    $reverse = 0;
    while(floor($temp)){
        $d = $temp % 10;
        $reverse = $reverse * 10 + $d;
        $temp = $temp / 10;
    }

    return $reverse;
}

echo reverseOrder(12345);
echo "\n";
echo reverseOrder("india");