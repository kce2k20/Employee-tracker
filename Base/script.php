
var to;
    var loc = [];
    var p1;
    var p2;

    function printfrom(res) {
        console.log(res);
    }

    function printto(res) {
        console.log(res);
    }
   
    function geocodeLatLng(geocoder, map, infowindow, s, d) {
        var input = s;
        var latlngStr = [s.lat.toString(), s.lng.toString()];
        var latlng = {
            lat: parseFloat(latlngStr[0]),
            lng: parseFloat(latlngStr[1])
        };
        console.log(latlng);
        geocoder.geocode({
            'location': latlng
        }, function (results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    map.setZoom(11);
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
                    infowindow.setContent(results[0].formatted_address);
                    var from = results[0].formatted_address;
                    printfrom(from);
                } else {
                    window.alert('No results found');
                }
            } else {
                window.alert('Geocoder failed due to: ' + status);
            }
        });

        var latlngStr1 = [d.lat.toString(), d.lng.toString()];
        var latlng = {
            lat: parseFloat(latlngStr1[0]),
            lng: parseFloat(latlngStr1[1])
        };
        console.log(latlng);
        var to = geocoder.geocode({
            'location': latlng
        }, function (results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    map.setZoom(11);
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
                    // location changed
                    infowindow.setContent(results[0].formatted_address);
                    to = results[0].formatted_address;
                    console.log(to);
                    printto(to)

                    infowindow.open(map, marker);
                } else {
                    alert('No results found');
                }
            } else {
                alert('Geocoder failed due to: ' + status);
            }
        });

    }

    

    function initMap() {
		
        var options = {
            zoom: 8,
            center: {
                lat: 11.0168,
                lng: 76.9558
            }
        }
          var map = new google.maps.Map(document.getElementById('map'), options);
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
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
        var markers = [{
                coords: {
                    lat: <?php echo  $x3[0]; ?>,
                    lng: <?php echo  $x4[0] ; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[0]; ?>+""
            },
            {
                coords: {
                    lat:  <?php echo  $x3[1]; ?>,
                    lng: <?php echo  $x4[1]; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[1]; ?>+""
            }, {
                coords: {
                    lat: 9.9252,
                    lng: 78.1198
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: '<h1>Lynn MA</h1>'

            }

        ];
        var iter = 0;
        for (var i = 0; i < markers.length; i++) {
            addMarker(markers[i]);
            console.log(markers[i]);
        }
      //  geocodeLatLng(geocoder, map, infowindow, markers[0].coords, markers[1].coords);
      function addMarker(props) {
        var marker = new google.maps.Marker({
            position: props.coords,
            map: map,
        });
        if (props.iconImage) {
            marker.setIcon(props.iconImage);
        }
        if (props.content) {
            var infoWindow = new google.maps.InfoWindow({
                content: props.content
            });

            marker.addListener('click', function () {
                infoWindow.open(map, marker);
            });
        }
    }
        //   console.log(p1);
    }