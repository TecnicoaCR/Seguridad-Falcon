		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "10.143388", "longitude":"-85.455342", "icon": "img/map.png"}
			]
		};
		
		//set up map options
		$("#map").mapmarker({
			zoom	: 14,
			center	: 'Seguridad Falcon Guanacaste',
			markers	: myMarkers
		});

