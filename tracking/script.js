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
    calculateAndDisplayRoute(directionsService, directionsDisplay, "", "")
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
}