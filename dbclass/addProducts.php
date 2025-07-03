<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add products</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <p class="text-danger"><?php echo $_SESSION["error"] ?? "";?></p>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <form action="process.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="pname" class="form-label">product name</label>
                    <input name="product_name" type="text" class="form-control" id="pname" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="pprice" class="form-label">product price</label>
                    <input name="product_price" type="text" class="form-control" id="pprice">
                  </div>
                  <div class="mb-3">
                    <label for="date" class="form-label">expiry date</label>
                    <input name="product_expiry_date" type="date" class="form-control" id="date">
                  </div>
                  <div class="mb-3">
                    <label for="input1" class="form-label">upload image</label>
                    <input name="product_image" class="form-control" type="file" id="input1">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>