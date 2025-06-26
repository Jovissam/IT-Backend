<?php
require("statesData.php");
?>
<?php foreach ($state_list as $key => $value) {};?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States In Nigeria</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6 offset-md-2">
                <h1 class="text-end">States In Nigeria</h1>
                <div class="d-flex justify-content-between my-3">
                    <h4>36 States in Nigeria</h4>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" onclick="sortByStates()">A - Z</a></li>
                            <li><a class="dropdown-item" onclick="SortByPopulation()">Population <small>(Lowest First)</small></a></li>
                        </ul>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input onkeyup="searchStates(this)" type="search" class="form-control" id="input1"
                        placeholder="name@example.com" />
                    <label for="input1">Type Name Of A State Or keywords</label>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">State</th>
                            <th scope="col">Capital</th>
                            <th scope="col">More Details</th>
                        </tr>
                    </thead>
                    <tbody id="state_data">

                        <!-- <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr> -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="states.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        const state_list = <?php echo json_encode($state_list) ?>;
        const state_data = document.querySelector("#state_data");

        console.log(state_list);
        

        showStates(state_list)

        function showStates(state_list) {
            state_data.innerHTML = "";
            let i = 1;

            state_list.forEach(state => { 
                state_data.innerHTML += `
                        <a href =""> <tr> 
                            <th scope="row">${i++}</th>
                            <td>${state.state}</td>
                            <td>${state.capital}</td> 
                            <td><a href ="viewState.php?stateId=${state.id}">view more<a></td> 
                        </tr> </a>
                `
            });
        }

        function searchStates(e) {
            const userInput = e.value.toLowerCase();
            const result = state_list.filter(function(state) {
                const resultOutput = ` ${state.state},${state.capital}`;
                const converted = resultOutput.toLowerCase();
                return converted.includes(userInput);
            });
            showStates(result);
            // console.log(result);

        }

        function sortByStates() {
            const sortedByStates = state_list.sort(function(a, b) {
                return a.state.localeCompare(b.state)
            })
            showStates(sortedByStates);
        }

        function SortByPopulation() {
            const sortedByPopulation = state_list.sort(function(a, b) {
                return parseFloat(a.population) - parseFloat(b.population);
            });
            showStates(sortedByPopulation);
        }
    </script>
</body>

</html>