<?php
/**
 * Even Odd Program: Print list of even and odd numbers
 * between 1 and 100
 *  
 * Even numbers are those which are divisible by 2. 
 * Numbers like 2,4,6,8,10, etc are even.
 * Odd numbers are those which are not divisible by 2. 
 * Numbers Like 1, 3, 5, 7, 9, 11, etc are odd.
 */

function evenOddNumbers(): array
{
    $odd_numbers = [];
    $even_numbers = [];

    for( $i=1; $i <=100; $i++ )
    {
        if($i % 2 == 0){
            $even_numbers[] = $i;
        }else{
            $odd_numbers[] = $i;
        }
    }

    return [$even_numbers, $odd_numbers];
}
# using array destructuring
[$evens, $odds] = evenOddNumbers();

printf(
    "Even numbers are: %s \n Odd numbers are: %s",
    implode(',', $evens), 
    implode(',', $odds)
);