<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$x=array();
for($i=0;$i<=3;$i++){
$lat = $firebase->get(DEFAULT_PATH.$i.'/latitude');
$long = $firebase->get(DEFAULT_PATH.$i.'/longitude');
$lat1=$lat.",".$long;
array_push($x,$lat1);
}
echo array_values($x)[0];
?>