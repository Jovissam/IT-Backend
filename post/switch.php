<?php

$age = readline("Enter your age:");
switch ($age) {
    case $age > 19: 
        echo "Adult";
        break;
    case $age > 13:
        echo "Teenager";
        break;
    case $age < 13:
        echo "Minor";
        break;
    
    default:
        echo "Invalid input";
        break;
}