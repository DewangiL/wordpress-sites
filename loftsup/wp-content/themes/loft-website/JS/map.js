(function($) {

   
    
    function new_map( $el ) {
        
        // var
        var $markers = $el.find('.marker');
        
        
        // vars
        var args = {
            zoom		: 16,
            center		: new google.maps.LatLng(0, 0),
            mapTypeId	: google.maps.MapTypeId.ROADMAP
        };
        
        
        // create map	        	
        var map = new google.maps.Map( $el[0], args);
        
        
        // add a markers reference
        map.markers = [];
        
        
        // add markers
        $markers.each(function(){
            
            add_marker( $(this), map );
            
        });
        
        
        // center map
        center_map( map );
        
        
        // return
        return map;
        
    }
    
    
    
    function add_marker( $marker, map ) { 
        // var
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
        var icon = $marker.attr('data-img');
        var type = $marker.attr('data-type');
        
        // create marker
        var marker = new google.maps.Marker({
            position	: latlng,
            map			: map,
            icon        : icon,
            type        : type
        });
    
        // add to array
        map.markers.push( marker );
        
        // if marker contains HTML, add it to an infoWindow
        if( $marker.html() )
        {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content		: $marker.html()
            });
    
            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function() {          
    
                infowindow.open( map, marker );
    
            });
        }
    
    }
    
    /*
    *  Marker Filter - NEW!
    */
    
    filterMarker = function (id) {
        for (i = 0; i < map.markers.length; i++) {
            marker = map.markers[i];
            
            if (document.getElementById(id).checked) {
                if (marker.type == id) {
                    marker.setVisible(true);
                } 
            }  else {
                if (marker.type == id) {
                    marker.setVisible(false);
                }
            }
            
        }    
    }
   
    function center_map( map ) {
    
        // vars
        var bounds = new google.maps.LatLngBounds();
    
        // loop through all markers and create bounds
        $.each( map.markers, function( i, marker ){
    
            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
    
            bounds.extend( latlng );
    
        });
    
        // only 1 marker?
        if( map.markers.length == 1 )
        {
            // set center of map
            map.setCenter( bounds.getCenter() );
            map.setZoom( 16 );
        }
        else
        {
            // fit to bounds
            map.fitBounds( bounds );
        }
    
    }
    
    
    var map = null;
    
    $(document).ready(function(){
    
        $('.acf-map').each(function(){
    
            // create map
            map = new_map( $(this) );
    
        });
     
                //zoom
                google.maps.event.addListener( map, 'zoom_changed', function( e ) {
                
                var zoom = map.getZoom();   
                
                 if(zoom!= 5)           
                 {
                var bounds = map.getBounds();
                
                   myLatLngss = [];
                      $.each( map.markers, function( i, marker ){			
                var myLatLng = new google.maps.LatLng(marker.position.lat(), marker.position.lng() );	
                            
                if(bounds.contains(myLatLng)===true) {						
                          myLatLngss.push( myLatLng );
                        }
                        else {
                               
                        }
                });
                   if(myLatLngss.length > 0)
                   { 
                     document.cookie = "coordn="+myLatLngss;
                     $("#customzm").load(location.href + " #customzm");                 
                   } 
                } 
                       
               });
       google.maps.event.addListener(map, 'dragend', function() {
       //alert('map dragged');
       var bounds = map.getBounds();
                
                      myLatLngss = [];
                      $.each( map.markers, function( i, marker ){
    
                var myLatLng = new google.maps.LatLng(marker.position.lat(), marker.position.lng() );	
                        
                if(bounds.contains(myLatLng)===true) {						
                          myLatLngss.push( myLatLng );
                        }
                        else {
       
                        }
               if(myLatLngss.length > 0)
                   {
                     document.cookie = "coordn="+myLatLngss;
                     $("#customzm").load(location.href + " #customzm");                 
                   }
                });
       
     } );
                  
    
    });
    
    })(jQuery);
  