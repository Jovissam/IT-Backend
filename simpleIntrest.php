<?php

$name = readline("what is your name: ");
$principal = readline("how much do you want to borrow? ");
$time = readline("how many years do you need the loan? ");
$rate = readline("at what % rate? ");

$result = $principal * $rate * $time / 100 ;

$total = $principal + $result;

echo "$name you borrowed $principal thousand for $time years with a rate of $rate. you have to pay $total";