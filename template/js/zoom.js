jQuery(function($){
	$('#slide_zoom_img').smoothZoom({
		width: 949,
		height: 532,
		pan_BUTTONS_SHOW: "NO",
		//pan_LIMIT_BOUNDARY: "NO",
		button_SIZE: 34,
		button_ALIGN: "top right",    
		zoom_MAX: 300,
		border_TRANSPARENCY: 20,
		container: 'zoom_container',
		button_COLOR: '#aebec3',
		button_BG_COLOR: '',
		button_MARGIN: 20,
		animation_SMOOTHNESS: 10,
		animation_SPEED_ZOOM: 2,
		
		/******************************************
		Enable Responsive settings below if needed.
		Max width and height values are optional.
		******************************************/
		responsive: false,
		responsive_maintain_ratio: true,
		max_WIDTH: '',
		max_HEIGHT: ''
	});
	$('#slide_zoom_img2').smoothZoom({
		width: 949,
		height: 532,
		pan_BUTTONS_SHOW: "NO",
		//pan_LIMIT_BOUNDARY: "NO",
		button_SIZE: 24,
		button_ALIGN: "top right",    
		zoom_MAX: 300,
		border_TRANSPARENCY: 20,
		container: 'zoom_container2',
		
		/******************************************
		Enable Responsive settings below if needed.
		Max width and height values are optional.
		******************************************/
		responsive: false,
		responsive_maintain_ratio: true,
		max_WIDTH: '',
		max_HEIGHT: ''
	});
	$('#slide_zoom_img3').smoothZoom({
		width: 949,
		height: 532,
		pan_BUTTONS_SHOW: "NO",
		//pan_LIMIT_BOUNDARY: "NO",
		button_SIZE: 24,
		button_ALIGN: "top right",    
		zoom_MAX: 300,
		border_TRANSPARENCY: 20,
		container: 'zoom_container3',
		
		/******************************************
		Enable Responsive settings below if needed.
		Max width and height values are optional.
		******************************************/
		responsive: false,
		responsive_maintain_ratio: true,
		max_WIDTH: '',
		max_HEIGHT: ''
	});
	
});