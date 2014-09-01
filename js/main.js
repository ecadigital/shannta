$(document).ready(function(){
	$('#footer-wrapper').click(function(){
		$('#foottoggle').slideToggle();
		
		$('html, body').delay(400).stop().animate({
		    scrollTop: $("#foottoggle").offset().top
		}, 1000);
	});
});