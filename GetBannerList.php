here<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$data=[
['url'=>'/#/main/InvitationBonus','bannerUrl'=>'/assets/banners/banner1.jpg'],
['url'=>'/#/wallet/Recharge','bannerUrl'=>'/assets/banners/banner2.jpg']
];
echo json_encode(['data'=>$data,'code'=>0,'msg'=>'Succeed','msgCode'=>0]);
?>
