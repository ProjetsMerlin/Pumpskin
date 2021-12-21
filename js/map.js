  var map_length = document.getElementById('map');
  if(map_length) {
  	google.maps.event.addDomListener(window, 'load', init);
  	function init() {
  		/*OPTIONS*/
  		var map_pint = {
  			url: './images/pint.png',
  			size: new google.maps.Size(64,64)
      };

      var map_center = [50.7386807,4.4960718];

      var map_zoom = 12;

      const mapOptions = {
       center: new google.maps.LatLng(map_center[0],map_center[1]),
       zoom: map_zoom,
       disableDefaultUI: true,
       scrollwheel: true,
       styles:
       [{"featureType":"all","elementType":"geometry","stylers":
       [{"saturation":"0"},{"lightness":"0"},{"visibility":"on"},{"gamma":"1"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":
       [{"saturation":36},{"color":"#e0e9f2"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":
       [{"visibility":"off"},{"color":"#000000"},{"lightness":"0"}]},{"featureType":"all","elementType":"labels.icon","stylers":
       [{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":
       [{"lightness":20},{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":
       [{"lightness":17},{"weight":1.2},{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":
       [{"color":"#454e57"},{"lightness":"0"},{"visibility":"on"},{"weight":"1.00"},{"gamma":"1"}]},{"featureType":"poi","elementType":"geometry","stylers":
       [{"color":"#515a63"},{"lightness":"0"}]},{"featureType":"poi.attraction","elementType":"geometry","stylers":
       [{"visibility":"on"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":
       [{"visibility":"off"}]},{"featureType":"poi.attraction","elementType":"geometry.stroke","stylers":
       [{"visibility":"off"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":
       [{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":
       [{"lightness":"0"},{"color":"#717171"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":
       [{"color":"#000000"},{"lightness":"0"},{"weight":0.2},{"visibility":"off"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":
       [{"color":"#022B3D"},{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":
       [{"lightness":"0"},{"visibility":"on"},{"color":"#717171"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":
       [{"color":"#717171"}]},{"featureType":"road.local","elementType":"geometry","stylers":
       [{"color":"#717171"},{"lightness":"0"}]},{"featureType":"transit","elementType":"geometry","stylers":
       [{"color":"#717171"},{"lightness":"0"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":
       [{"color":"#DEDEDD"},{"lightness":"0"}]}]
     }

     /*MAP*/
     var mapElement = document.getElementById('map');
     var map = new google.maps.Map(mapElement, mapOptions);

     /* PINTS */
     var adresses = [{
      'id':1,
      'title':'PumpSkin',
      'location': [50.7386807,4.4960718],
      'address':'Avevenue des Rossignols, 5',
      'cp':'1310 La Hulpe'
     },{
      'id':2,
      'title':'Olé !',
      'location': [50.7454377,4.4528708],
      'address':'Dolce La Hulpe, 135 A',
      'cp':'1310 La Hulpe'
     }];

     for(pint of adresses) {
       var infowindow = new google.maps.InfoWindow();
       var contentString =
       '<div id="infoWindow">'
       +'<div class="popup_map">'
       +'<h2>'
       +pint.title
       +'</h2>'
       +'<p>'
       +pint.address
       +'<br>'
       +pint.cp
       +'</p>'
       +'</div>'
       +'</div>';

       let marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(pint.location[0],pint.location[1]),
        icon: map_pint,
        content: contentString
      });

       map.setCenter({lat:map_center[0], lng:map_center[1]});
       infowindow.setContent(marker.content);
       infowindow.open(map, marker);
     }
   }
 }