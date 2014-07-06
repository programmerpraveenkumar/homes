<?php include 'include/page/header.php'; ?>    

<link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>/css/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="<?php echo INCLUDE_FILE ?>/js/modernizr.js"></script>


			<!-- Content -->
			<div class="row content">               
                <!-- Slider -->
                <section class="slider col-lg-12 col-md-12 col-sm-12">
                    <div class="flexslider flexsliderBig">
                        <div class="_flexslider">
          <ul class="slides">
                                <?php echo $this->data["topslider"] ?>
          </ul>
        </div>
<!--                        <div class="mp-slider">
                                <ul class="items">
                                    <li><img src="<?php echo INCLUDE_FILE ?>img/slide1.jpg" alt="" /></li>                                    
                                    <li><img src="<?php echo INCLUDE_FILE ?>img/slide2.jpg" alt="" /></li>
                                    <li><img src="<?php echo INCLUDE_FILE ?>img/slide3.jpg" alt="" /></li>
                                </ul>                         
                                <a href="#" class="mp-prev"></a>
                                <a href="#" class="mp-next"></a>
                        </div>-->
                    </div>
                </section>
                <!-- /Slider -->
                
                
               
                
                
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
					
					<!-- Featured Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Featured Products</h4>
								
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						
							<?php echo $this->data['product'];  ?>
                                                    
                                               
                                                   
						
						<!-- /Carousel -->
						
					</div>
					<!-- /Featured Products -->					
				</section>
				<!-- /Main Content -->
				
				<!-- Sidebar -->
				<aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
					
					<!-- Categories -->
					<div class="row sidebar-box purple">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
								<i class="icons icon-folder-open-empty"></i>
								<h4>Categories</h4>
							</div>
							
							<div class="sidebar-box-content">
								<ul>
									<?php if(isset($this->data['categoryleft']))echo $this->data['categoryleft']; ?>									
									
								</ul>
							</div>
							
						</div>
							
					</div>
					<!-- /Categories -->
					
					
					
					
					
					
					
					
				</aside>
				<!-- /Sidebar -->
				
			</div>
			<!-- /Content -->
			

			<!-- Footer -->
			<footer id="footer" class="row">
				
				
				
				<!-- Main Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="main-footer">
					
						<div class="row">
							
							<!-- Information -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>Information</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> About Us</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> New Collection</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Bestsellers</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Manufacturers</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Privacy Policy</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Terms &amp; Conditions</a></li>
								</ul>
							</div>
							<!-- /Information -->
							
							
							<!-- Like us on Facebook -->
							<!-- /Like us on Facebook -->
							
							
							<!-- Contact Us -->
							<div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
								<h4>Contact Us</h4>
								<ul>
									<li><i class="icons icon-location"></i> 8901 Marmora Road, Glasgow, D04 89GR.</li>
                                    <li><i class="icons icon-phone"></i> +1 800 603 6035</li>
									<li><i class="icons icon-mail-alt"></i><a href="mailto:mail@company.com"> mail@companyname.com</a></li>
									<li><i class="icons icon-skype"></i> homeshop</li>
								</ul>
                                
                                <!-- Social Media -->
                                <div class="social-media">
                                    <ul>
                                        <li class="social-googleplus tooltip-hover" data-toggle="tooltip" data-placement="top" title="Google+"><a href="#"></a></li>
                                        <li class="social-facebook tooltip-hover" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="#"></a></li>
                                        <li class="social-pinterest tooltip-hover" data-toggle="tooltip" data-placement="top" title="Pinterest"><a href="#"></a></li>
                                        <li class="social-twitter tooltip-hover" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#"></a></li>
                                        <li class="social-youtube tooltip-hover" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="#"></a></li>
                                    </ul>
                                </div>
                                <!-- /Social Media -->
                                
							</div>
							<!-- /Contact Us -->
							
							
							<!-- Newsletter -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<form id="newsletter" action="http://inthe7heaven.com/homeshop-html/php/newsletter.php">
									<h4>Newsletter Sign Up</h4>
									<p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
									<input type="text" name="newsletter-email" placeholder="Enter your email address">
									<input type="submit" name="newsletter-submit" value="Submit">
								</form>
							</div>
							<!-- /Newsletter -->
							
						</div>
						
					</div>
					
				</div>
				<!-- /Main Footer -->
				
				
				
				<!-- Lower Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="lower-footer">
					
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<p class="copyright">Copyright 2014 <a href="#">HomeShop</a>. All Rights Reserved.</p>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<ul class="payment-list">
									<li class="payment1"></li>
									<li class="payment2"></li>
									<li class="payment3"></li>
									<li class="payment4"></li>
									<li class="payment5"></li>
								</ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			</footer>
			<!-- Footer -->
			
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container --><!-- jQuery -->
  <script src="<?php echo INCLUDE_FILE ?>js/jquery.min.js"></script>


  <!-- FlexSlider -->
  <script defer src="<?php echo INCLUDE_FILE ?>js/jquery.flexslider.js"></script>
		
		<script type="text/javascript">

    $(window).load(function(){
      $('._flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
		
	<?php include 'include/page/footer.php'; ?>