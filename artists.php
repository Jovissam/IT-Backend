<?php 
// include()
require("database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is artist page</h1>
    <ul>
       <?php foreach($artists as $index => $artist){
            echo "<li>";
            echo "<a href='view.php?artist=$index'>";
            echo $artists[$index]['name'];
            echo "</a>";
            echo "</li>";
       }
       ?>
    </ul>
</body>
</html>