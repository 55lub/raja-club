<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// Random Game List
$games = [
  ["gameId"=>1,"gameName"=>"WINGO 30s","status"=>1],
  ["gameId"=>2,"gameName"=>"WINGO 1Min","status"=>1],
  ["gameId"=>3,"gameName"=>"WINGO 3Min","status"=>1],
  ["gameId"=>4,"gameName"=>"WINGO 5Min","status"=>1],
  ["gameId"=>5,"gameName"=>"Aviator","status"=>1],
  ["gameId"=>6,"gameName"=>"Mines","status"=>1]
];
echo json_encode(["code"=>0,"msg"=>"Succeed","data"=>$games]);
?>
