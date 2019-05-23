<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var Paris=new google.maps.LatLng(48.856614,2.3522219000000177);
var Budapest=new google.maps.LatLng(47.497912,19.04023499999994);
var Monaco=new google.maps.LatLng(43.73841760000001,7.42461579999997);
var Milano=new google.maps.LatLng(45.4654219,9.18592430000001);
var Vienne=new google.maps.LatLng(48.2081743,16.37381890000006);
var Prague=new google.maps.LatLng(50.0755381,14.43780049999998);
var Amsterdam=new google.maps.LatLng(52.3702157,4.895167899999933);
var Nice=new google.maps.LatLng(43.7101728,7.261953199999994);
var Venice=new google.maps.LatLng(45.4408474,12.31551509999997);




var marker;
var marker1;
var marker2;
var marker3;
var marker4;
var marker5;
var marker6;
var marker7;
var marker8;


function initialize()
{
var mapProp = {
  center:Paris,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:Paris,
  });
  var marker1=new google.maps.Marker({
  position:Budapest,
  });
    var marker2=new google.maps.Marker({
  position:Monaco,
  });
     var marker3=new google.maps.Marker({
  position:Milano,
  });
      var marker4=new google.maps.Marker({
  position:Vienne,
  });
   var marker5=new google.maps.Marker({
  position:Prague,
  });
   var marker6=new google.maps.Marker({
  position:Amsterdam,
  });
  var marker7=new google.maps.Marker({
  position:Nice,
  });
  var marker8=new google.maps.Marker({
  position:Venice,
  });


marker.setMap(map);
marker1.setMap(map);
marker2.setMap(map);
marker3.setMap(map);
marker4.setMap(map);
marker5.setMap(map);
marker6.setMap(map);
marker7.setMap(map);
marker8.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:100%;height:400px;"></div>
</body>
</html>
