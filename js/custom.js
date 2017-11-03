/* Contact dropdow for choosing Inquiry Type */
jQuery( '.inquiry-type' ).change( function(){
	var selected = jQuery('.inquiry-type option:selected').val();
	if(selected == '-- --'){
		jQuery( '.home-form' ).hide();
		jQuery( '.government-form' ).hide();
		jQuery( '.customer-form' ).hide();
	} else if(selected == 'Home Sales'){
		jQuery( '.home-form' ).show();
		jQuery( '.government-form' ).hide();
		jQuery( '.customer-form' ).hide();
	} else if(selected == 'Commercial Sales'){
		jQuery( '.home-form' ).hide();
		jQuery( '.government-form' ).show();
		jQuery( '.customer-form' ).hide();
	} else if(selected == 'Customer Service'){
		jQuery( '.home-form' ).hide();
		jQuery( '.government-form' ).hide();
		jQuery( '.customer-form' ).show();
	}
});

/* Select all Replacement Materials */
/*jQuery('.moreinformation input[type=checkbox][value="Replacement Materials"]').change(function() {
	if(jQuery(this).is(":checked")) {
		jQuery('.moreinformation input[type=checkbox][value="Cedar Roof Boards"]').prop("checked", true);
		jQuery('.moreinformation input[type=checkbox][value="Cedar Siding"]').prop("checked", true);
		jQuery('.moreinformation input[type=checkbox][value="Doors"]').prop("checked", true);
		jQuery('.moreinformation input[type=checkbox][value="Windows"]').prop("checked", true);
		jQuery('.moreinformation input[type=checkbox][value="Other Replacement Materials"]').prop("checked", true);
	} else {
		jQuery('.moreinformation input[type=checkbox][value="Cedar Roof Boards"]').prop("checked", false);
		jQuery('.moreinformation input[type=checkbox][value="Cedar Siding"]').prop("checked", false);
		jQuery('.moreinformation input[type=checkbox][value="Doors"]').prop("checked", false);
		jQuery('.moreinformation input[type=checkbox][value="Windows"]').prop("checked", false);
		jQuery('.moreinformation input[type=checkbox][value="Other Replacement Materials"]').prop("checked", false);		
	}
});*/

/* Select Replacement Materials if any subitem is selected */
function checkParentItem (checkedItem) {
	if (checkedItem == "Cedar Roof Boards" || checkedItem == "Cedar Siding" || checkedItem == "Doors" || checkedItem == "Windows" || checkedItem == "Other Replacement Materials") {
		console.log(checkedItem);
		if (jQuery('.moreinformation input[type=checkbox][value="Cedar Roof Boards"]').is(':checked') ||
				jQuery('.moreinformation input[type=checkbox][value="Cedar Siding"]').is(':checked') ||
				jQuery('.moreinformation input[type=checkbox][value="Doors"]').is(':checked') ||
				jQuery('.moreinformation input[type=checkbox][value="Windows"]').is(':checked') ||
				jQuery('.moreinformation input[type=checkbox][value="Other Replacement Materials"]').is(':checked')
				) {
				jQuery('.moreinformation input[type=checkbox][value="Replacement Materials"]').prop("checked", true);
		} else {
			jQuery('.moreinformation input[type=checkbox][value="Replacement Materials"]').prop("checked", false);
		}
	}
}

/* Limit Inquiry Details options checking */
jQuery('.moreinformation input[type=checkbox]').change(function() {
	var numberOfChecked = jQuery('input:checkbox:checked').length,
			maxNumberOfChecked = 4,
			checkedItem = jQuery(this).val();
			
	checkParentItem(checkedItem);	
		
	// Exclude the subitems from counting of checked items
	if (jQuery('.moreinformation input[type=checkbox][value="Cedar Roof Boards"]').is(':checked')) {
		numberOfChecked -= 1;
	}
	if (jQuery('.moreinformation input[type=checkbox][value="Cedar Siding"]').is(':checked')) {
		numberOfChecked -= 1;
	}
	if (jQuery('.moreinformation input[type=checkbox][value="Doors"]').is(':checked')) {
		numberOfChecked -= 1;
	}
	if (jQuery('.moreinformation input[type=checkbox][value="Windows"]').is(':checked')) {
		numberOfChecked -= 1;
	}
	if (jQuery('.moreinformation input[type=checkbox][value="Other Replacement Materials"]').is(':checked')) {
		numberOfChecked -= 1;
	}
	
	// Check the number of checked options
	if (numberOfChecked > maxNumberOfChecked) {
		jQuery(this).prop("checked", false);
		alert("You can check maximum " +maxNumberOfChecked+" Inquiry Details options");
	}
});

/* Responsive Menu Trigger */

jQuery('.responsive-menu-trigger').on('click', function(){

	if(jQuery('.navbar-menu').hasClass('responsive-show')){
		jQuery('.navbar-menu').removeClass('responsive-show');
	} else {
		jQuery('.navbar-menu').addClass('responsive-show');
	}

});


jQuery('.close-responsive-menu').on('click', function(){
	jQuery('.navbar-menu').removeClass('responsive-show');
})

jQuery(window).scroll(function() {
	if(jQuery(window).scrollTop()>900){
		jQuery('header').addClass('sticky');
	} else {
		jQuery('header').removeClass('sticky');
	}
});

jQuery(window).ready(function() {
    if (jQuery('html').offset().top>900) {
        jQuery('header').addClass('sticky');
    } else {
        jQuery('header').removeClass('sticky');
    }
});

wow = new WOW(
	{
	  offset:       0,          // default
      mobile:       false
	}
)
wow.init();




if (jQuery(window).width() > 768) {
	jQuery('.section-header > div > .panel-1').addClass('wow fadeInRight').attr('data-wow-duration', '1s').attr('data-wow-delay', '0.5s');
	jQuery('.section-content > div > .panel-1').addClass('wow fadeInRight').attr('data-wow-duration', '1s').attr('data-wow-delay', '1s');
	jQuery('.section-number').addClass('wow fadeInLeft').attr('data-wow-duration', '1s').attr('data-wow-delay', '0s');
}






if (jQuery(window).width() < 900) {
	jQuery('.img-holder').attr('data-image', '');
} 

jQuery(window).on('resize', function() {
    if (jQuery(window).width() < 900) {
		jQuery('.img-holder').attr('data-image', '');
    }
});

jQuery('.img-holder').imageScroll();



/* Nice Scroll */

	jQuery(document).ready(function() {
		if (jQuery(window).width() > 768) {
			function long2tile(lon,zoom) { return (Math.floor((lon+180)/360*Math.pow(2,zoom))); }
			function lat2tile(lat,zoom)  { return (Math.floor((1-Math.log(Math.tan(lat*Math.PI/180) + 1/Math.cos(lat*Math.PI/180))/Math.PI)/2 *Math.pow(2,zoom))); }

			var zm = 6;
			var tx = long2tile(-7.338867,zm);
			var ty = lat2tile(55.165482,zm);

			jQuery(document).ready(function($) {  

				var py = ty;
				for(var y=0;y<10;y++) {      
					var dv = $('<div/>').addClass('row');
					var px = tx;
				for(var x=0;x<20;x++) {
					var url = '	http://a.tile.openstreetmap.org/'+zm+'/'+px+'/'+py+'.png';
					dv.append("<div class='tile' style='background-image:url("+url+")' />");
					px++;
				}
				dv.css('width',256*20);
				$("#maps").append(dv);
					py++;
				}

				var nice = $("body").niceScroll({touchbehavior:false,cursorcolor:"#bec2c2",cursoropacitymax:0.6,cursorwidth:8, scrollspeed: 70});

				$("#nice div").html($("#nice div").html()+' '+nice.version);

			});
		}
	});

	jQuery(window).load(function(){
		if (jQuery(window).width() < 768) {
			jQuery('.navbar-menu').removeClass('wow');
			jQuery('.navbar-menu').removeClass('animated');
			jQuery('.navbar-brand').removeClass('wow');
			jQuery('.navbar-brand').removeClass('animated');
			jQuery('header').removeClass('sticky');
		} else {
			if(jQuery(window).scrollTop()>900){
				jQuery('header').addClass('sticky');
			}
	    }
	});

	jQuery(window).on('resize', function() {
        if (jQuery(window).width() < 768) {
			jQuery('.navbar-menu').removeClass('wow');
			jQuery('.navbar-menu').removeClass('animated');
			jQuery('.navbar-brand').removeClass('wow');
			jQuery('.navbar-brand').removeClass('animated');
			jQuery('header').removeClass('sticky');
        } else {
        	if(jQuery(window).scrollTop()>900){
				jQuery('header').addClass('sticky');
			}
        }
	});

	jQuery('.offset-div').each(function(){
		jQuery(this).addClass('clearfix');
	});
