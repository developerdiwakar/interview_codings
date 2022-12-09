<?php
// Program to print first 15 prime numbers

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

