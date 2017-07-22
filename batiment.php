<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 900px; margin: 0; padding: 0 ; width:100%;}
  #map_canvas { height: 900px; width:100%;}
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false">
</script>
</head>
 <div id="map" style="width: 100%; height:600px;"></div>
<script type="text/javascript">
       var locations = [
         ['Goettingen',  53.457831502 ,-2.108165514, 'batiment1.html'],
         ['Kassel', 53.447831502 ,-2.38165514, 'batiment2.html'],
         ['Witzenhausen',53.4497831502 ,-2.288175514, 'batiment3.html']

 ];

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 10,
 center: new google.maps.LatLng(53.457831502 ,-2.288165514),
 mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

var marker, i;
var flag = new google.maps.MarkerImage('images/bull.png');
	  
for (i = 0; i < locations.length; i++) {
  marker = new google.maps.Marker({
   position: new google.maps.LatLng(locations[i][1], locations[i][2]),
   map: map,
   url: locations[i][3],
   
     icon: flag
   
   
   
  });

 google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
   return function() {
     infowindow.setContent(locations[i][0]);
     infowindow.open(map, marker);
   }
 })(marker, i));

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
   return function() {
     infowindow.setContent(locations[i][0]);
     infowindow.open(map, marker);
     document.location.href = this.url;
   }
 })(marker, i));

    }

     </script>

<body onload="initialize()">
<div id="map_canvas" style="width:100%; height:900px;"></div>
</body>
</html>