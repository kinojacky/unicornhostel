var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: false,				
				lat: 24.1684662,
				lng: 120.6427656
			  });
			  
			  var marker = map.addMarker({
				lat: 24.1684662,
				lng: 120.6427656,
	            title: 'Company, Inc.'
		       });
			});
        },        

    };
}();