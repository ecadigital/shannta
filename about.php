<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LEVIF</title>
    
    <!-- Owl Carousel Assets -->
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/owl-carousel/owl.theme.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/layout.css" />
    
    
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    
    
    
    <div id="topbanner">
	    <div id="logo-wrapper">
		    <a href="index.php">
			    <img src="images/logo.png">
		    </a>
	    </div>
	    <!--logo-wrapper-->
	    
	   <?php include("inc-nav.php");?>
    </div>
    <!--topbanner-->
    
    
    
    
    <!--mobile nav-->
    <div class="off-canvas-wrap" data-offcanvas>
	  <div class="inner-wrap">
	    <nav class="tab-bar">
	      
	
	      <section class="middle tab-bar-section">
	        <h1 class="title">
		        <a href="index.php">
			        <img src="images/logomob.png">
		        </a>
	        </h1>
	      </section>
	
	      <section class="right-small">
	        <a class="right-off-canvas-toggle menu-icon" href="#"></a>
	      </section>
	    </nav>
	
	    
	
	   <?php include("inc-mobmenu.php");?>
	
	    <section class="main-section">
	    
	    
		
	      
	      
	    <div id="wrapper">
		    
		    <div id="inner-wrapper">
			    
			    
			    
			    
			    
			    
			    <div class="row">
				  <div class="medium-4 columns">
					  <div class="nomg red headblock">
						  <h1 class="white">About Us</h1>
						  <h2 class="white">Levif Collagen Tripeptide</h2>
					  </div>
					  
					  <div class="nomg pink secondblock showpc">
						  <p>Mai was born and raised in Moscow. As a child she 
had been playing tennis very professionally for seven 
years practicing for many hours every day and 
attending competitions as well as in Russia as 
abroad. That influenced and strengthened her
character. After finishing the Moscow State Institute 
for International Relations Julia joined the family 
business and together with her mother works in 
publishing and Internet.</p>
					  </div>
					  
					  <div class="nomg lightpink showpc">
						  
						  <div class="ct">
							  <img src="images/phone.png">
							  <strong style="padding-top:10px; padding-left:5px;">02 222 2222, 02 342 2567</strong>
						  </div>
						  
						  <div class="clearfix"></div>
						  <br>
						  
						  <div class="ct">
							  <img src="images/mail.png">
							  <strong style="padding-top:8px; padding-left:15px;">info@levifcollagen.com</strong>
						  </div>
						  <div class="clearfix"></div>
					  </div>
				  </div>
				  
				  
				  
				  
				  <div class="medium-8 columns">
					  <div class="mgimg">
						  <img src="images/s1.jpg">
					  </div>
					  
					  <div class="nomg pink secondblock showmob">
						  <p>Mai was born and raised in Moscow. As a child she 
had been playing tennis very professionally for seven 
years practicing for many hours every day and 
attending competitions as well as in Russia as 
abroad. That influenced and strengthened her
character. After finishing the Moscow State Institute 
for International Relations Julia joined the family 
business and together with her mother works in 
publishing and Internet.</p>
					  </div>
					  
					  <div class="mg lightbrown">
						  <p class="smalltxt">
							  <strong>Mai was born and raised in Moscow.</strong> As a child she had been playing tennis very professionally for seven years 
practicing for many hours every day and attending competitions as well as in Russia as abroad. That influenced 
and strengthened her character. After finishing the Moscow State Institute for International Relations Julia joined 
the family business and together with her mother works in publishing and Internet.</p>

<p class="smalltxt">Despite her purposeful and self-control appearance, Julia admits that she is quite a diffident person and is seldom 
self-satisfied. She is still very much into sports – such as jogging, yoga, and skiing. Her friends consider sincere 
love to people and kindness as her main characteristics.</p>

<p class="smalltxt">When she was 14 she started to develop her singing professionally improving her skills while collaborating as
well as with Russian as with foreign performers and producers. Music is her main passion; it inspires her and 
gives her strength. By her work – high-grade and sincere – Julia does not only want to touch the people’s hearts, 
but also to influence the quality and development of the music scene in Russia. In the nearest future Julia wants to 
produce and launch new singles and videos, as well as release of her first solo album. After talking to Julia 
everybody realizes that this strong girl is a real dreamer inside.
						  </p>
					  </div>
					  
					  <div class="mg lightpink showmob">
						  
						  <div class="ct">
							  <img src="images/phone.png">
							  <strong style="padding-top:10px; padding-left:5px;">02 222 2222, 02 342 2567</strong>
						  </div>
						  
						  <div class="clearfix"></div>
						  <br>
						  
						  <div class="ct">
							  <img src="images/mail.png">
							  <strong style="padding-top:8px; padding-left:15px;">info@levifcollagen.com</strong>
						  </div>
						  <div class="clearfix"></div>
					  </div>
					  
				  </div>
				  
				  
				</div>
			    <!--row-->
			    
			    
			    
			    
		    </div>
		    <!--inner-wrapper-->
			
			
			<?php include("inc-footer.php");?>
			
			
	    </div>
	    <!--wrapper--> 
	      
	      
	    </section>
	    <!--main-section-->
	    
	  <a class="exit-off-canvas"></a>
	
	  </div>
	</div>
	<!--end mobile nav-->
    
    
    
    
    
    
        
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="css/owl-carousel/owl.carousel.js"></script>
    <script src="js/main.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script>
    $(document).ready(function() {
      $('#aboutbtn').addClass('active');
      $("#owl-demo").owlCarousel({
      navigation : false,
      slideSpeed : 600,
      autoPlay:true,
      paginationSpeed : 600,
      singleItem : true,
      navigation:true,
      pagination:false

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
      
      
      
       //Sort random function
	  
	 
	  $("#homeblock").owlCarousel({
	  	pagination:false,
	    navigation: true,
	    items : 3,
	    itemsDesktop : [1199,3],
	    itemsDesktopSmall : [979,3],
	    navigationText: [
	      "<i></i>",
	      "<i></i>"
	      ],
	   
	    
	   
	 
	  });
      
      
      
    });
    </script>
  </body>
</html>
