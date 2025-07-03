<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";

$connection = new mysqli ($host, $username, $password, $database);

if ($connection->connect_error) {
    die("error conecting to database");
}

// create connection
// test connection
// statement
// execution
// check success
// data