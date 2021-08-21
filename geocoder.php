<?php

require('geocoder.inc.php');

$lat = $_GET['lat'];
$lon = $_GET['lon'];

if (!is_numeric($lat)) {
    http_response_code(400);
    die('Invalid lat');
}
if (!is_numeric($lon)) {
    http_response_code(400);
    die('Invalid lon');
}

$pdo = new PDO(
    "mysql:host=$host;dbname=$db;",
    $username,
    $password
);

$sql = "select iso_2 FROM boundaries
left join codes on boundaries.iso1 = codes.ISO_3
where ST_Contains(boundaries.shape, GeomFromText('POINT($lon $lat)',3))";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$rs = $stmt->fetch(PDO::FETCH_OBJ);
echo $rs->iso_2;
