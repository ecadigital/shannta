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
					  <div id="cth" class="nomg red headblock">
						  <h1 class="white">Contact Us</h1>
						  <h2 class="white">Levif Collagen</h2>
					  </div>
					  
					  
					  <div id="f3"  class="mg red headblock showmob" style="padding:0px;">
						  <img src="images/phone100.jpg">
					  </div>
					  
					  
					  <div class="nomg lightbrown faqp">
						  
						  <h6>ติดต่อสอบถามเพิ่มเติม</h6>
						  
						  <p class="showmob">
							  บริษัท แฟร์ เมดดิซีน จำกัด: Fair Medicine CO.,LTD
							  76/475 , Village No. 15 , Bangmoung Sub-Dictrict , Bangyai Dictrict, 
							  Nonthaburi Province ,11140
						  </p>
						  
						<form>
						  <div class="row">
						    <div class="small-8" style="width:90%;">
						      <div class="row">
						        <div class="small-1 columns">
						        </div>
						        <div class="small-11 columns">
						          <input type="text" id="right-label" placeholder="* Full Name">
						          <input type="text" id="right-label" placeholder="* Email">
						          <textarea style="height:106px;" class="error" placeholder="Message..."></textarea>
						          <button id="ctsubmit" type="submit">Send</button>
						        </div>
						        
						        
						      </div>
						    </div>
						  </div>
						</form>
						  
						  
						  <div class="clearfix"></div>
					  </div>
				  </div>
				  
				  
				  
				  
				  <div class="medium-8 columns">
					  
					  
					 <div id="f3"  class="mg red headblock showpc" style="padding:0px;">
						  <img src="images/ct2.gif">
					  </div>
					  
					  
					  
					  
					  <div class="medium-12 columns">
						  <div class="mgimg">
						 	 <img src="images/car.jpg">
						  </div>
					  </div>
					  
					  <div class="clearfix"></div>
					  
					  
										  
					  
					  					  
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
      $('#contactbtn').addClass('active');
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
