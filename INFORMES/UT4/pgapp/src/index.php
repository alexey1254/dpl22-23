<?php require_once("./config.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:,">
    <title>Travelroad</title>
</head>
<?php
$postgre = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

$result = pg_query($postgre, "SELECT * FROM places");

$arrayResult = pg_fetch_all($result);
$visited = [];
$toVisit = [];
for($i = 0; $i < count($arrayResult); $i++) {
    if($arrayResult[$i]["visited"] === "t") {
        array_push($visited, $arrayResult[$i]);
    } else {
        array_push($toVisit, $arrayResult[$i]);
    }
}
?>
<body>
    <h1>My travel Bucket list</h1>

    <h2>Places I'd like to visit</h2>
    <ul>
            <?php 
            for ($i=0; $i < count($toVisit) ; $i++) { 
                echo "<li>".$toVisit[$i]["name"]."</li>";
            }
            ?>
        </ul>
    <h2>Places I've Already been To</h2>
    <ul>
            <?php 
            for ($i=0; $i < count($visited) ; $i++) { 
                echo "<li>".$visited[$i]["name"]."</li>";
            }
            ?>
        </ul>

</body>
</html>

