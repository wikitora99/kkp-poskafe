
var dezSettingsOptions = {};

function getUrlParams(dParam) 
	{
		var dPageURL = window.location.search.substring(1),
			dURLVariables = dPageURL.split('&'),
			dParameterName,
			i;

		for (i = 0; i < dURLVariables.length; i++) {
			dParameterName = dURLVariables[i].split('=');

			if (dParameterName[0] === dParam) {
				return dParameterName[1] === undefined ? true : decodeURIComponent(dParameterName[1]);
			}
		}
	}

(function($) {
	
	"use strict"
	
	var direction =  getUrlParams('dir');
	
	dezSettingsOptions = {
		// DEFAULT THEME
		// typography: "poppins",
		// version: "light",
		// layout: "vertical",
		// headerBg: "color_1",
		// navheaderBg: "color_1",
		// sidebarBg: "color_1",
		// sidebarStyle: "full",
		// sidebarPosition: "fixed",
		// headerPosition: "fixed",
		// containerLayout: "full",
		// direction: direction

		// CUSTOM THEME 2 (DARK MODE)
		// typography: "poppins",
		// version: "dark",
		// layout: "vertical",
		// primary: "color_1",
		// headerBg: "color_1",
		// navheaderBg: "color_1",
		// sidebarBg: "color_1",
		// sidebarStyle: "full",
		// sidebarPosition: "fixed",
		// headerPosition: "fixed",
		// containerLayout: "full",
		// direction: direction

		// CUSTOM THEME 3 (CHANGE PRIMARY COLOR)
		typography: "poppins",
		version: "light",
		layout: "vertical",
		primary: "color_9",
		headerBg: "color_1",
		navheaderBg: "color_1",
		sidebarBg: "color_1",
		sidebarStyle: "full",
		sidebarPosition: "fixed",
		headerPosition: "fixed",
		containerLayout: "full",
		direction: direction

		// CUSTOM THEME 4 (DARK SIDEBAR)
		// typography: "poppins",
		// version: "light",
		// layout: "vertical",
		// headerBg: "color_1",
		// primary: "color_2",
		// navheaderBg: "color_2",
		// sidebarBg: "color_2",
		// sidebarStyle: "full",
		// sidebarPosition: "fixed",
		// headerPosition: "fixed",
		// containerLayout: "full",
		// direction: direction

		// CUSTOM THEME 5 (MODERN SIDEBAR STYLE)
		// typography: "poppins",
		// version: "light",
		// layout: "vertical",
		// primary: "color_7",
		// headerBg: "color_1",
		// navheaderBg: "color_7",
		// sidebarBg: "color_1",
		// sidebarStyle: "modern",
		// sidebarPosition: "static",
		// headerPosition: "fixed",
		// containerLayout: "full",
		// direction: direction

		// CUSTOM THEME 6 (HORIZONTAL SIDEBAR LAYOUT)
		// typography: "poppins",
		// version: "light",
		// layout: "horizontal",
		// primary: "color_1",
		// headerBg: "color_1",
		// navheaderBg: "color_1",
		// sidebarBg: "color_3",
		// sidebarStyle: "full",
		// sidebarPosition: "static",
		// headerPosition: "fixed",
		// containerLayout: "full",
		// direction: direction
	};

	
	if(direction == 'rtl')
	{
        direction = 'rtl'; 
    }else{
        direction = 'ltr'; 
    }
	
	new dezSettings(dezSettingsOptions); 

	jQuery(window).on('resize',function(){
        /*Check container layout on resize */
        dezSettingsOptions.containerLayout = $('#container_layout').val();
        /*Check container layout on resize END */
        
		new dezSettings(dezSettingsOptions); 
	});
	
})(jQuery);