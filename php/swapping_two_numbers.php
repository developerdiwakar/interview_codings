<?php 
/**
 * Two numbers can be swapped or interchanged. 
 * It means first number will become second and second number will become first.
 */

# 1st method
$a = 4;
$b = 5;

$a = $a + $b; 
$b = $a - $b;
$a = $a - $b;

echo "1st Method:\n";
print("a = {$a}, b = {$b}\n");

# 2nd Method
$x = 45;
$y = 56;

$$x = $y;
$y = $x;
$x = $$x;

echo "2nd method: \n";
printf("x = %u, y = %u", $x, $y);

# 3rd Method
$first = 23;
$second = 90; 

[$first, $second] = [$second, $first];

echo "3rd method: \n";
printf("first = %u, second = %u", $first, $second);