
var locationPicker = new locationPicker('map', {
    setCurrentPosition: true,
    lat: 35.6892,
    lng: 51.3890
    
    // You can omit this, defaults to true
}, {
    zoom: 15 // You can set any google map options here, zoom defaults to 15
});

google.maps.event.addListener(locationPicker.map, 'idle', function (event) {
    // Get current location and show it in HTML
    var location = locationPicker.getMarkerPosition();
    if($('#long_register').length > 0){
        $('#long_register').val(location.lng);
    }

    if($('#lat_register').length > 0){
        $('#lat_register').val(location.lat);
    }

});