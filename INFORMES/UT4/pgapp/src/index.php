<?php
$postgre = pg_connect("host=alu7396.arkania.es port=5432 dbname=travelroad user=travelroad_user password=dpl0000");

$result = pg_query($postgre, "SELECT * FROM places");

var_dump(pg_fetch_all($result));



?>
