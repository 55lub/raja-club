here<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// Random Fill Logic - ON
$period = date("Ymd").rand(1000,9999);
$number = rand(0,9);
$color = ($number%2==0) ? "red" : "green";
if($number==0 || $number==5){ $color="violet"; }
$result = ["period"=>$period,"number"=>$number,"color"=>$color,"isRandom"=>1];
echo json_encode(["code"=>0,"data"=>$result]);
?>
