
function cycle_category_name(currSlideElement, nextSlideElement, options, forwardFlag) {
	category = new Array();
	category[0] = 'HTML5';
	category[1] = 'CSS3';
	category[2] = 'Javascript';
	category[3] = 'Java';
	category[4] = 'PHP';
	category[5] = 'Linux';
	console.log(options);
	console.log(options.currSlide);
	jQuery('#category-title').text(category[options.currSlide]);
}

(function( $ ) {
	$('#contact-me').dialog({
		autoOpen: false,
		draggable: false,
		height: 390,
		modal: true,
		resizable: false,
		width: 600
	});
	
	$('#contact-submit').button().click( function( event ) {
		event.preventDefault();
		jQuery.post('mail.php', jQuery('#contact-form').serialize(), function( data ) {
			if(data) {
				alert("Message sent successfully.");
				jQuery('#contact-me').dialog("close");
			}
			else {
				alert("Message not sent.");
			}
		});
		return false;
	});
	$('#contact-clear').button();
	
	$('#contact-link').click( function(event) {
		event.preventDefault();
		$('#contact-me').dialog("open")
	});
	
	$('#homepage-content').cycle({
		fx: 'scrollLeft',
		after: cycle_category_name,
		speedIn:  500, 
    speedOut: 500, 
    easeIn:  'easeInBack', 
    easeOut: 'easeOutBack',
		timeout: 8000
	});
	
	$('.menu-thezcoder-container').height($('#main-content').height() + 30);
	
	$('#submit').button();
	
})( jQuery );
