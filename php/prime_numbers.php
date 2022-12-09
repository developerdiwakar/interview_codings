<?php
// Program to print first 15 prime numbers
function run(): void
{
    $primes = [];
    $stop = false;
    $number = 2;
    $is_prime = false;
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

        if(count($primes) == 15){
            $stop = true;
        } 
        ++$number;
    }
    printf("1st 15 Prime numbers are: %s", implode(',', $primes));
}

// Run the program
run();

