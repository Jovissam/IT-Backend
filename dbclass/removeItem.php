<?php
session_start();
require("connection.php");

$item_id = $_POST["item_id"];

$statement = "DELETE FROM products WHERE id=$item_id";

$result = $connection->query($statement);

print_r($result);

if ($result) {
    header("location:index.php");
    $_SESSION["success"] = "item removed successfully";
} 
