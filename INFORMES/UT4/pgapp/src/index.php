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
<body>
    <h1>My travel Bucket list</h1>

    <h2>Places I'd like to visit</h2>

    <h2>Places I've Already been To</h2>


</body>
</html>
<?php
$postgre = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

$result = pg_query($postgre, "SELECT * FROM places");

$arrayResult = pg_fetch_all($result);

foreach($arrayResult as $arrayInterno) {
    foreach($arrayInterno as $valor) {
        echo "<h1>$valor</h1>";
    }
}

var_dump(pg_fetch_all($result));



?>
