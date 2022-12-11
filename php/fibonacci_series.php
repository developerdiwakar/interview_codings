<?php
/** The Fibonacci series is a series of elements where, 
 * the previous two elements are added to get the next element, 
 * starting with 0 and 1. In this article, we will learn about 
 * how to generate a Fibonacci series in PHP using iterative and recursive way. 
 * Given a number n, we need to find the Fibonacci series up to the nth term.
 * Examples:
 * Input : 10
 * Output : 0 1  1 2 3 5 8 13 21 34
 * Input : 15
 * Output : 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 
 */ 

## 1st Method - Using normal function
function fibonacciSeries(int $nth_term){
    $first = 0;
    $second = 1;
    $series = [];
    // push first and second number
    array_push($series, $first, $second);
    // Generate fibinacci series
    for($i=1; $i<=$nth_term-2; $i++){
        $next = $first + $second;
        // Assign the next number to the series list
        array_push($series, $next);
        // Now, change the number elements
        $first = $second;
        $second = $next;
    }

    return implode(" ", $series);
}

// Call fibonacci series numbers
$fibonacci_series = fibonacciSeries(10);
echo $fibonacci_series;
echo "\n\n";

## 2nd Method Using Recursive way
// PHP code to get the Fibonacci series
// Recursive function for fibonacci series.
function Fibonacci($number){
	
	// if and else if to generate first two numbers
	if ($number == 0)
		return 0;	
	else if ($number == 1)
		return 1;	
	
	// Recursive Call to get the upcoming numbers
	else
		return (Fibonacci($number-1) +
				Fibonacci($number-2));
}

// Driver Code
$number = 10;
for ($counter = 0; $counter < $number; $counter++){
	echo Fibonacci($counter),' ';
}
