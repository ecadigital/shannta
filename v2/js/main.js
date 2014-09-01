$(document).ready(function(){





		if($("#foottoggle").is(":hidden"))
		{
		    // do stuff
		    $('#toggle').attr('src','images/toggle.png');
		}else{
			$('#toggle').attr('src','images/toggletop.png');
		}




	$('#footer-wrapper').click(function(){
		
		
		$('#foottoggle').slideToggle(400,function(){
			if($("#foottoggle").is(":hidden"))
			{
			    // do stuff
			    $('#toggle').attr('src','images/toggle.png');
			}else{
				$('#toggle').attr('src','images/toggletop.png');
			}
		});
		
		
		
		$('html, body').delay(400).stop().animate({
		    scrollTop: $("#foottoggle").offset().top
		}, 1000);
	});
});