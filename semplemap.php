<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mapwize.js Demo - simple map</title>

    <script src="dist/mapwize.js" type="text/javascript"></script>
    <link rel="stylesheet" href="dist/mapwize.css" />

    <style>
        body {
            margin: 0;
            padding: 0;
        }
        #map {
            position:absolute; top:30; bottom:30; width:100%;
            height: 600px;
        }
    </style>

</head>
<body>

<div id="map"></div>

<script>

    //Define the bounds of the map
    var bounds = new L.LatLngBounds(
            new L.LatLng(49.742313935073504183, 4.5989323407411575317),
            new L.LatLng(49.742851692813445652, 4.5997658371925345122)
    );

    //Create the map
    //use maxBounds to limit the visible area
    var map = Mapwize.map('map', {
        apiKey: '1f04d780dc30b774c0c10f53e3c7d4ea',      // PASTE YOU API KEY HERE !!! This is a demo key. It is not allowed to use it for production. The key might change at any time without notice.
        accessKey: 'demo'                                // Key to gain access to the demo building
    });

    //Fits the bounds of the map so the entire region is visible.
    map.fitBounds(bounds);

    map.on('click', function(e){
        console.log('You just clicked on the map at location ' + e.latlng);
    });

    map.on('placeClick', function(e){
        console.log('You just clicked on ' + e.place.name);
    });

    map.on('floorChanged', function(e){
        console.log('Floor changed to ' + e.floor);
    });

    map.on('floorsChanged', function(e){
        console.log('Available floors at position changed to ' + e.floors);
    });

</script>

</body>
</html>