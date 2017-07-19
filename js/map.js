
      function initMap() {
        var uluru = {lat: 27.705205, lng: 85.3225239};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    

 



