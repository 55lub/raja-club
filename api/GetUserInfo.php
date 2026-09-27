<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode(["code"=>0,"data"=>["balance"=>1000,"bonus"=>500,"user"=>"Player"]]);
?>
