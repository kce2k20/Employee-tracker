<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$emp = array("/E741", "/E941", "/E712","/E134", "/E333", "/E131","/E118","/E213","/E130", "/E148");
$x=array();
$y=array();
$r=array();
$arrlength=count($emp);
$co=0;
$as=0;
for($a=0;$a<$arrlength;$a++) {
$asg = $firebase->get(DEFAULT_PATH.'/employeedata'.$emp[$a].'/assigned');
$com = $firebase->get(DEFAULT_PATH.'/employeedata'.$emp[$a].'/completed');
$rat=($com/$asg)*10;
$Feedback = $firebase->Update(DEFAULT_PATH."/employeedata".$emp[$a],["rating"=>$rat]);
}header("Location: statistics.php"); 
?>