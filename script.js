
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
        var markers = [{
                coords: {
                    lat: <?php echo  11.2321; ?>,
                    lng: <?php echo 12.21323; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: "<?php echo 'sundar' ?>"
            },
            {
                coords: {
                    lat:  <?php echo  12.23123; ?>,
                    lng: <?php echo 13.2313; ?>
                },
                iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content: "<?php echo 'ajay' ?>"
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