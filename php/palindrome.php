<?php
/**
 * Palindrome program: A number or string is said to be a palindrome 
 * if it remains same even after reversing the digits or letters respectively.
 * Examples for Palindrome Number: 
 * 1441 => 1441
 * 12521 => 12521
 * MADAM => MADAM
 * MALAYALAM => MALAYALAM
 */
# Check palindrome string
function checkPalindrome(string|int $input): string
{
    if(! is_numeric($input)){
        $input = trim($input);
        $length = strlen($input);
        // Reversing the string
        // Note we can also use strrev() builtin function
        for($i=$length-1; $i >= 0; --$i){
            $output[] = $input[$i];
        }
        $output = implode("", $output);
    }else{
        $temp = $input;
        $output = 0;
        // Reversing the number
        while(floor($temp)){
            $d = $temp % 10;
            $output = 10 * $output + $d;
            $temp = $temp / 10;
        }
    }


    return $output === $input 
        ? 'Palindrome': 
        'Not Palindrome';
}

// Call check palindrome function
$palindrome = checkPalindrome(242);
echo $palindrome;