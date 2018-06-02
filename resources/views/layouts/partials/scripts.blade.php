<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="{{ url('js/SimpleCounter.js')}}"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/sticky.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script src="{{url('js/angular.min.js')}}"></script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaq6wF94uXOdblFHAGtA_fksdRXg1-Es4"> </script>
<script>
	window.map = false;
    window.marker   = false;
    window.infowindow   = false;             
    
                            
    function initialize(){
        var myLatlng = new google.maps.LatLng(-12.1248284,-77.0291482);
    
        var mapOptions = {
            zoom:16,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,

            streetViewControl:false,
            overviewMapControl:false,
            mapTypeControl:false    
            
        };
        
    window.map = new google.maps.Map(document.getElementById('map'), mapOptions); 
    window.marker = new google.maps.Marker({
      position: myLatlng,
      map:  window.map,
       title: 'Oficina ClubPeru'
    }); 
                     
    }
   

    google.maps.event.addDomListener(window, 'load', initialize);
</script>   