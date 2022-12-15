<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:,">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$postgre = pg_connect("host=alu7396.arkania.es port=5432 dbname=travelroad user=travelroad_user password=dpl0000");

$result = pg_query($postgre, "SELECT * FROM places");

var_dump(pg_fetch_all($result));



?>
