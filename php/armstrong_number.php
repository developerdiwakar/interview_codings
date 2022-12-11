<?php
declare(strict_types=1);
/**
 * Armstrong Number
 * An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.
 * 0, 1, 153, 371, 407, 471, etc are Armstrong numbers.
 * For example,
 * 407 = (4*4*4) + (0*0*0) + (7*7*7)  
 * = 64 + 0 + 343  
 * 407 = 407  
 * 
 */

# Check Armstrong Number
function checkArmstrong( int $number ): string
{
    $temp = $number;
    $new = 0;
    while(floor($temp)){
        $d = $temp % 10;
        $new = $new + pow($d, 3); 
        $temp = $temp / 10;
    }
    return $number === $new 
        ? "{$number} is an Armstrong Number" : "{$number} is Not An Armstrong Number";
}

//Call check armstrong number
echo checkArmstrong(371);