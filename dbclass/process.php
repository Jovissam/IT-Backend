
<?php
session_start();
require("connection.php");

// collecting the data from the form
$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_expiry_date = $_POST["product_expiry_date"];



$stamp = time();
$new_ext = explode("/", $_FILES["product_image"]["type"]);
$new_name = explode(".", $_FILES["product_image"]["name"]);
$location = "uploads/$new_name[0]$stamp.$new_ext[1]";
move_uploaded_file($_FILES["product_image"]["tmp_name"], $location);

echo $location;
// perform validation task
$statement = " INSERT INTO products (product_name, product_price, product_expiry_date, product_image)";
$statement .= "VALUES ('$product_name', '$product_price', '$product_expiry_date', '$location')";

$result = $connection->query($statement);

// print_r($result);
// if ($result) {
//     $_SESSION["success"] = "$product_name added successfully";
//     header("location:index.php");
// } else {
//     header("location:addProducts.php");
// }
