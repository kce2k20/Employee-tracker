<?php
$va="/3";
$va1="latitude";
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

//read
/*
$name = $firebase->get(DEFAULT_PATH.'/1'.'/latitude');
$namei2 = $firebase->get(DEFAULT_PATH.'/2'.'/longitude');
$x=array();
$emp=array();
for($i=1;$i<=3;$i++){
$lat = $firebase->get(DEFAULT_PATH.$i.'/latitude');
$long = $firebase->get(DEFAULT_PATH.$i.'/longitude');
$dum=array("id"=>$i,"latitude"=>$lat,"longitude"=>$long);
print_r($dum);
}*/
//print_r($emp);
$data=["name"=>"sam","location"=>"s1223"];
$Feedback = $firebase->set(DEFAULT_PATH."/dat",$data);
?>