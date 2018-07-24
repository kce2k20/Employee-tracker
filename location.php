<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Google Map</title>
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
 <script src="initiallocation.php"></script>
  <?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$emp = array("/HBK","/KnzCTHIsSFdx6sC07RsL2uqLegM2");
$x3=array();
$x4=array();
$na=array();
$arrlength=count($emp);
for($a=0;$a<$arrlength;$a++) {
$la= $firebase->get(DEFAULT_PATH.'/employees_location'.$emp[$a].'/lat');
$lo= $firebase->get(DEFAULT_PATH.'/employees_location'.$emp[$a].'/lng');
$ra = $firebase->get(DEFAULT_PATH.'/employees_location'.$emp[$a].'/name');
array_push($x3,$la);
array_push($x4,$lo);
array_push($na,$ra);
}
?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCZ0CmJMqF3ydIjn_w5VyJ9hbIeCtz6pw&callback=initMap">
    </script>
</head>

<body>
  <div id="map"></div>
</body>

</html>