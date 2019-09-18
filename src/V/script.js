
// CARTE____________________________________________________________________
//
$(".adress_city")
  .focusout(function () {
    var address = $('#address').val() + '+' + $('#zipcode').val() + '+' + $('#city').val();
    address = address.replace(/\ /g, '+');
    $.get("https://nominatim.openstreetmap.org/search?q=" + address + "&format=json&limit=1&email=jeanclaude@certifies.com", function (data) {

      var latitude = data[0]['lat']
      var longitude = data[0]['lon']
      $("#basicMap").html('');
      loadmap(latitude, longitude, "basicMap");
    });
  })

function loadmap(latitude, longitude, mapName) {
  map = new OpenLayers.Map(mapName);
  map.addLayer(new OpenLayers.Layer.OSM());

  var lonLat = new OpenLayers.LonLat(longitude, latitude)
    .transform(
      new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
      map.getProjectionObject() // to Spherical Mercator Projection
    );

  var zoom = 16;
  var markers = new OpenLayers.Layer.Markers("Markers");
  map.addLayer(markers);
  markers.addMarker(new OpenLayers.Marker(lonLat));
  map.setCenter(lonLat, zoom);
}
