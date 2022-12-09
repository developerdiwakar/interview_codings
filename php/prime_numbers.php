<?php
/**
 * Program: Print 1st 15 prime numbers
 * 
 * Prime Number: A number which is only divisible by 1 and itself is called prime number. Numbers 2, 3, 5, 7, 11, 13, 17, etc. are prime numbers.
 * 2 is the only even prime number.
 * It is a natural number greater than 1 and so 0 and 1 are not prime numbers.
 */

// Create show prime numbers function
function show_prime_numbers(): void
{
    $primes = [];
    $stop = false;
    $number = 2;
    $is_prime = false;
    $num_of_primes = 15;
    while(! $stop){
        if ($number <= 3){
            $primes[] = $number;
        }

        for($i = 2; $i <= $number/2; $i++){
            if($number % $i == 0){
                $is_prime = false;
                break;
            }else{
                $is_prime = True;
            }
        }
        if ( $is_prime ){
            $primes[] = $number;
        }

        if(count($primes) == $num_of_primes){
            $stop = true;
        } 
        ++$number;
    }
    // Finally print the output
    printf(
        "1st %d Prime numbers are: %s", 
        $num_of_primes, 
        implode(',', $primes)
    );
}

//calling the function
show_prime_numbers();

