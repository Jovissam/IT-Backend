<?php
$all = []; // creating an empty array

for ($i = 1; $i <= 100; $i++) {     // creating a loop to generate numbers from 1 to hundred
    $all[] = $i;     // storing the generated numbers indside the empty array
    // print_r($all);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Numbers</th>
                      <th scope="col">Even</th>
                      <th scope="col">Odd</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i=0; $i < count($all); $i++) {      // looping through all thwe items in the array and displaying them on the browser
                        echo "<tr>";
                      echo "<th scope='row'>". $all[$i] ."</th>";
                      if ($all[$i] % 2 == 0) {    // if  statement for even numbers
                        echo "<td class ='text-success'>". $all[$i] ."</td>";
                        echo "<td></td>";
                      } else {
                        echo "<td></td>";
                        echo "<td class ='text-danger'>". $all[$i] ."</td>";
                        
                      }
                    echo "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>