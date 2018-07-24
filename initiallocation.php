
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
$emp = array("/qFe95xCy7DZgcQqG0REumzJmJui1","/a4lg78oyyRQvsMWbmSThgDModTd2","/SlnROTah3YPy1u8i5FluJ0wpSpg1","/ZcQ34byYdra8pmu7HNY6PyrqyzT2","/W5ud8RkEC2gLJlN17jWa9vsaQaf2","/20GBmVR0bIaE3J0NiageKC8rUrK2","/DW6CkGLEPsMOCMTP6CHk1u1a4Jy1","/LhaOsuyG6Pdt4d9W84vnnr3ol7l2","/l9LxuhdicLWh9jVdX5XDpFg33xR2","/M8glulyV99Y2aJJr8R6Sw9mIQOD2");
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
                    lat:<?php echo  $x3[3]; ?>,
                    lng: <?php echo  $x4[3]; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[3]; ?>+""

            },{
                coords: {
                    lat:<?php echo  $x3[4]; ?>,
                    lng: <?php echo  $x4[4]; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[4]; ?>+""

            },{
                coords: {
                    lat:<?php echo  $x3[5]; ?>,
                    lng: <?php echo  $x4[5]; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[5]; ?>+""

            },{
                coords: {
                    lat:<?php echo  $x3[6]; ?>,
                    lng: <?php echo  $x4[6]; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[6]; ?>+""

            },{
                coords: {
                    lat:<?php echo  $x3[7]; ?>,
                    lng: <?php echo  $x4[7]; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[7]; ?>+""

            },{
                coords: {
                    lat:<?php echo  $x3[8]; ?>,
                    lng: <?php echo  $x4[8]; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[8]; ?>+""

            },{
                coords: {
                    lat:<?php echo  $x3[9]; ?>,
                    lng: <?php echo  $x4[9]; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: ""+<?php echo $na[9]; ?>+""

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