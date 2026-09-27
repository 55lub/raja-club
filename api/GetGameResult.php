<?php
header('Content-Type: application/json');
$colors = ['RED','GREEN','VIOLET'];
echo json_encode([
  "data" => [
    "number" => rand(0,9),
    "color" => $colors[array_rand($colors)],
    "period" => date('Ymd') . rand(1000,9999)
  ]
]);
?>
