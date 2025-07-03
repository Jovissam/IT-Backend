<?php
require("database.php");
$key = $_GET['artist'];

if (array_key_exists($key, $artists)) {
    $selected_artist = $artists[$key];
} else {
    header("location:404.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>View profile</h1>
    <h1>Artist name: <?php echo $selected_artist['name']; ?></h1>
    <h4>Artist Songs: <?php echo count($selected_artist['songs']); ?></h4>
    <ul>
        <?php foreach ($selected_artist['songs'] as $song): ?>
            <li><?php echo $song; ?></li>
        <?php endforeach ?>
    </ul>


    <script>
        const artists = <?php echo json_encode($artists); ?>;
        console.log("xx", artists);
    </script>
</body>

</html>