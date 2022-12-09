<?php
/**
 * Program: Print factorial of given number
 * using recursion
 * 
 * Factorial Program
 * The factorial of a number n is defined by the product of all the digits from 1 to n (including 1 and n).
 *  For example,
 *   4! = 4*3*2*1 = 24  
 *   6! = 6*5*4*3*2*1 = 720  
 */
// Take number input
$n = 5;
//Create factorial function
function factorial($n)
{
    if($n <= 1){
        return 1;
    }
    return $n * factorial($n-1);
}

$fact = factorial($n);
printf("Factorial of %d is: %d", $n, $fact);
