function loadMap(){
	var pune = {lat: 18.5204, lng: 73.8567};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: pune,
          zoom: 4
        });
       
      }


}