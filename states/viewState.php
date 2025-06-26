<!-- <pre> -->
<?php
require("statesData.php");
$key = $_GET['stateId'];
// $display = 0;

foreach ($state_list as $id => $state) {;
    if ($state["id"] == $key) {
        $display = $state;
        // print_r($display);
    }
};

if (!$display) {
header("location:error.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Welcome To <?php echo $display["state"]; ?></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>

<body>
    <h1 class="text-center">Welcome To <?php echo $display["state"]; ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="col">Capital</th>
                            <td scope="col"><?php echo $display["capital"]; ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Our Population</th>
                            <td scope="col"><?php echo $display["population"]; ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Our Resources</th>
                            <td scope="col"><?php print_r(count($display["minerals"])); ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Our Governor</th>
                            <td scope="col"><?php echo $display["governor"]; ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Our Population</th>
                            <td scope="col"><?php echo $display["population"]; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-floating mb-3">
                    <input onkeyup="searchForResource(this)" type="search" class="form-control" id="input1"
                        placeholder="name@example.com" />
                    <label for="input1">Search for a mineral</label>
                </div>
                <ul id="resourceList">

                </ul>
            </div>
        </div>
    </div>



    <script>
        const resourceData = <?php echo json_encode($display["minerals"]) ?>;
        const resourceList = document.querySelector("#resourceList");

        showResources(resourceData);

        function showResources(resourceData) {
            resourceList.innerHTML = "";

            resourceData.forEach(element => {
                resourceList.innerHTML += `<li>${element}</li>`;
            });
        }
        console.log(resourceData);

        function searchForResource(e) {
            const userInput = e.value.toLowerCase();
            const result = resourceData.filter(function(state) {
                const converted = state.toLowerCase();
                return converted.includes(userInput);
            });
            showResources(result);
            // console.log(result);
        }
    </script>
</body>

</html>