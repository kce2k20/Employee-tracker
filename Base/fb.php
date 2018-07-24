<?php
$va="/3";
$va1="latitude";
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://detial-9ee7b.firebaseio.com';
const DEFAULT_TOKEN = 'qJnPhqxfU9fED2u1clAZOJrdgrzYEzo3DLJV1bcM';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

//read
/*
$name = $firebase->get(DEFAULT_PATH.'/1'.'/latitude');
$namei2 = $firebase->get(DEFAULT_PATH.'/2'.'/longitude');*/
$x=array();
$emp=array();
for($i=1;$i<=3;$i++){
$lat = $firebase->get(DEFAULT_PATH."/".$i.'/latitude');
$long = $firebase->get(DEFAULT_PATH."/".$i.'/longitude');
$dum=array("id"=>$i,"latitude"=>$lat,"longitude"=>$long);
print_r($dum);
}
//print_r($emp);
?>