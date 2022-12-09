<?php 
// Swapping two numbers without using third variables

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