<?php

function conexion(){

$host = "host=dpg-cvmpjhadbo4c7394pgq0-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_p8qo";
$user = "user=jhonvl";
$password = "password=TYGio4yQblZlkxDxpfjdm3CSNWyjurL0";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>