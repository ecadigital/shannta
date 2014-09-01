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
	    
	    
		<div id="hero-slider">
	        <div class="container">
	          <div class="row">
	            <div class="span12">
	              <div id="owl-demo" class="owl-carousel">
	
	                <div class="item"><img src="images/banner1.jpg" alt="The Last of us"></div>
	                <div class="item"><img src="images/banner1.jpg" alt="GTA V"></div>
	                <div class="item"><img src="images/banner1.jpg" alt="Mirror Edge"></div>
	
	              </div>
	            </div>
	          </div>
	        </div>
	    </div>
	    <!--hero-slider-->
	      
	      
	    <div id="wrapper">
		    
		    <div class="row">
			  <div class="large-4 columns nopad">
				  <a href="#">
					  <img src="images/b1_07.jpg">
				  </a>
			  </div>
			  <div class="large-4 columns nopad">
				  <a href="#">
					  <img src="images/tt_06.jpg">
				  </a>
			  </div>
			  <div class="large-4 columns nopad">
				  <a href="#">
					  <img src="images/b1_07.jpg">
				  </a>
			  </div>
			</div>
			
						
			<div id="linehome" class="line1"></div>
			<!--line1-->
			
			
			
			<div id="home-shortcut">
			
						<div id="homeblock" class="owl-carousel owl-theme">
						  <div class="item">
						  <a href="about.php">
							  <img src="images/b1.jpg">
						  </a>
						  <h1>ABOUT US</h1></div>
						  <div class="item">
						  <a href="healthy-lifestyle.php">
							  <img src="images/b2.jpg">
						  </a><h1>HEALTHY LIFESTYLE</h1></div>
						  <div class="item">
						  <a href="testimonial.php">
							  <img src="images/b3.jpg">
						  </a><h1>TESTIMONIAL</h1></div>
						  
						  <div class="item">
						  <a href="">
							  <img src="images/b1.jpg">
						  </a>
						  <h1>1</h1></div>
						  <div class="item">
						  <a href="">
							  <img src="images/b2.jpg">
						  </a><h1>2</h1></div>
						  <div class="item">
						  <a href="">
							  <img src="images/b3.jpg">
						  </a><h1>3</h1></div>
						  
						</div>
						
						
						
						
						<div id="mobshort">
							<div class="row">
							  <div class="large-4 columns nopad">
								  <a href="#">
									  <img src="images/b1.jpg">
									  <h1>ABOUT US</h1>
								  </a>
							  </div>
							  <div class="large-4 columns nopad">
								  <a href="#">
									  <img src="images/b2.jpg">
									  <h1>HEALTHY LIFESTYLE</h1>
								  </a>
							  </div>
							  <div class="large-4 columns nopad">
								  <a href="#">
									  <img src="images/b3.jpg">
									  <h1>TESTIMONIAL</h1>
								  </a>
							  </div>
							</div>
						</div>
						<!--mobshort-->
						

			</div>
			<!--home-shortcut-->
			
			
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
	     itemsTablet: [768,3],
	     itemsTabletSmall: false,
	     itemsMobile : [479,3],
	    navigationText: [
	      "<i></i>",
	      "<i></i>"
	      ],
	   
	    
	   
	 
	  });
      
      
      
    });
    </script>
  </body>
</html>
