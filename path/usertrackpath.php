<!DOCTYPE html>
<html lang="en">
<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$lat= $firebase->get(DEFAULT_PATH.'/employees_location'.'/qFe95xCy7DZgcQqG0REumzJmJui1'.'/customer_lat');
$lng= $firebase->get(DEFAULT_PATH.'/employees_location'.'/qFe95xCy7DZgcQqG0REumzJmJui1'.'/customer_lng');
$lat1= $firebase->get(DEFAULT_PATH.'/employees_location'.'/qFe95xCy7DZgcQqG0REumzJmJui1'.'/lat');
$lng1= $firebase->get(DEFAULT_PATH.'/employees_location'.'/qFe95xCy7DZgcQqG0REumzJmJui1'.'/lng');

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Google Map</title>
  <style>
    #map {
      height: 500px;;
      width: 100%;
    }
  </style>
  <script >
  function InitDist() {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
        center: {
            lat: 11.1271,
            lng: 78.6569
        }
    });
    directionsDisplay.setMap(map);

    //     var onChangeHandler = function() {
    //       calculateAndDisplayRoute(directionsService, directionsDisplay);
    //     };
    //     document.getElementById('start').addEventListener('change', onChangeHandler);
    //     document.getElementById('end').addEventListener('change', onChangeHandler);
    //   }
    calculateAndDisplayRoute(directionsService, directionsDisplay,{lat:<?php echo $lat1 ?>,lng:<?php echo $lng1 ?>},{lat:<?php echo $lat ?>,lng:<?php echo $lng ?>})
    function calculateAndDisplayRoute(directionsService, directionsDisplay, p1, p2) {
        var route = {origin: p1,
            destination: p2,
            travelMode: 'DRIVING'}
        directionsService.route(route, function (response, status) {
            console.log(response);
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
}</script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNpy7jLUyBPI7ASGxhTj-IduUSgOaC-aA&callback=InitDist">
    </script>
</head>

<body>
  <div id="map"></div>
</body>

</html>