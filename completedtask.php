<?php
$va=$_POST['ename'];
$akin=array("qFe95xCy7DZgcQqG0REumzJmJui1","a4lg78oyyRQvsMWbmSThgDModTd2","QlHUI8OKu4PJEd2FKkBfKQzpiXv1","ZcQ34byYdra8pmu7HNY6PyrqyzT2","W5ud8RkEC2gLJlN17jWa9vsaQaf2","20GBmVR0bIaE3J0NiageKC8rUrK2","DW6CkGLEPsMOCMTP6CHk1u1a4Jy1","LhaOsuyG6Pdt4d9W84vnnr3ol7l2","l9LxuhdicLWh9jVdX5XDpFg33xR2","M8glulyV99Y2aJJr8R6Sw9mIQOD2");
$emp =array("E741", "E941", "E712","E134", "E333", "E131","E118","E213","E130", "E148");
$arrlength=count($emp);
for($a=0;$a<$arrlength;$a++) {
if ($va==$emp[$a])
{
$re=$a;
}
}
$va2="/".$va;
$va3="/".$akin[$re];
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$Feedback1 = $firebase->get(DEFAULT_PATH.'/employeedata'.$va2.'/completed');
echo $Feedback1;
$Feedback1 = $Feedback1+1;
echo $Feedback1;
echo $va2;
$Feedback = $firebase->Update(DEFAULT_PATH.'/employeedata'.$va2,["completed"=>$Feedback1]);
$Feedback2 = $firebase->Update(DEFAULT_PATH.'/employeedata'.$va2,["status"=>1]);
//read cutomer lat long
//$Feedback3 = $firebase->get(DEFAULT_PATH.'/Customer'.$va3.'/Latitude');
//$Feedback4 = $firebase->get(DEFAULT_PATH.'/Customer'.$va3.'/Longitude');
//set akilesh cust lat lng
$Feedback5 = $firebase->Update(DEFAULT_PATH.'/employees_location'.$va3,["customer_lat"=>0]);
$Feedback6 = $firebase->Update(DEFAULT_PATH.'/employees_location'.$va3,["customer_lng"=>0]);
$Feedback7 = $firebase->Update(DEFAULT_PATH.'/employees_location'.$va3,["availability"=>1]);
header("Location: mainpage.php"); 
?>