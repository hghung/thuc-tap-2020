<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distance Between Two Cities</title>
    
</head>
<body>
    <style>
        #map
        {
            weight: 700px;
            height: 600px;
        }
    </style>
    <div >
            <div id="map"></div>   
    </div>
    <button id="get"> banh boa </button>
    <div id="output" class="result-table"></div>
    <div id="output2" class="result-table"></div>


</div>

      

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJx44jiP9QHAeOec2C0aLW29jiL6OQyRU&libraries=places"></script>

<script>
    var lat = {{ $chitiet->baotrikh->diachi->lat }};
    var lng = {{ $chitiet->baotrikh->diachi->lng }};
    x = navigator.geolocation;
    x.getCurrentPosition(success, failure);
    function success(position)
    {
        document.getElementById("output").style.display = "none";
        var myLat = position.coords.latitude;
        console.log(myLat);
        var myLong = position.coords.longitude;
        console.log(myLong);
        
        var coords = new google.maps.LatLng(myLat,myLong);

        var directionsDisplay = new google.maps.DirectionsRenderer(); 
        var directionsService = new google.maps.DirectionsService(); 
        var map;
        
        var a = new google.maps.LatLng(myLat, myLong);
        var b = new google.maps.LatLng(lat, lng);

        var mapOptions = {
            zoom:13,
            center: coords

        };
        map = new google.maps.Map(document.getElementById('map'),mapOptions);
        directionsDisplay.setMap(map);

        function calculateRoute(){
            var request = {
                origin: a,
                destination: b,
                travelMode: 'DRIVING'
            };

            directionsService.route(request, function(result, status){
                // console.log(result, status);
                if(status == "OK"){
                    $("#output").html("<div class='result-table'> Driving distance: " + result.routes[0].legs[0].distance.text + ".</div>");
                    $("#output2").html("<div class='result-table'> Duration: " + result.routes[0].legs[0].duration.text + ".</div>");
                    document.getElementById("output").style.display = "block";
                    directionsDisplay.setDirections(result);
                }
            });
        }
        document.getElementById('get').onclick= function(){
            calculateRoute();
        }

    }
    function failure()
    {

    }
    

    

</script>
</html>