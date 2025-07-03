<?php
session_start();
require ("connection.php");
$statement = "SELECT * FROM products"; // creating a query for the database
$result = $connection->query($statement);  //sending the query to the data base
// print_r($result);
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <style>
      #img{
        width: 70px;
        height: 50px;
      }
    </style>
</head>
<body>
    <p class="bg-success"><?php echo $_SESSION["success"] ?? "";?></p>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">product name</th>
                      <th scope="col">product price</th>
                      <th scope="col">product expiry date</th>
                      <th scope="col">product image</th>
                      <th scope="col">more</th>
                    </tr>
                  </thead>
                  <tbody><pre>
                    <?php if ($result->num_rows > 0):?>
                        <?php while ($rows = $result->fetch_assoc()):?>
                            <?php print_r($rows)?>
                    <?php endwhile?>
                    <?php else:?>
                        <p>no item found</p>
                    <?php endif?>
                  </tbody>
                </table>
                <a href="addProducts.php"><button type="button" class="btn btn-outline-primary">add products</button></a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$_SESSION['success'] = null;
?>