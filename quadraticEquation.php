<?php
$a = readline("input your A value(if empty write 0). ");
$b = readline("input your B value(if empty write 0). ");
$c = readline("input your C value(if empty write 0). ");


$root = sqrt((pow($b, 2)) - (4 * $a * $c)); // finding the squareroot

$solution1 = round((-$b + $root) / (2 * $a), 2); // checking using + operator and rounding it up to 2 decimal places

$solution2 = round((-$b - $root) / (2 * $a), 2);  // checking using - operator and rounding it up to 2 decimal places

echo "$solution1 or $solution2" ;






// php quadraticEquation.php