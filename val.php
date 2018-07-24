<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

$user= $firebase->get(DEFAULT_PATH.'/admin'.'/username');
$pass= $firebase->get(DEFAULT_PATH.'/admin'.'/password');
$user1=$_POST['username'];
$pass1=$_POST['pass'];
$pass2 = '"'.$pass1.'"';
$user2 = '"'.$user1.'"';
if ($user==$user2 && $pass==$pass2)
{
	header("Location: mainpage.php"); 
}
else
{
	header("Location: login.html"); ;
}
?>