<?php include 'include/page/header.php'; ?>
					
					
					
					
			
			
			<!-- Content -->
			<div class="row content">
            	
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="<?php echo PATH ?>">Home</a> <i class="icons icon-right-dir"></i> <i class="icons icon-right-dir"></i> </p>
                    </div>
                </div>
                
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
					
					
                    <div id="product-single">
					
						<!-- Product -->
						<div class="product-single">
							
							<div class="row">
								
								<!-- Product Images Carousel -->
								<div class="col-lg-5 col-md-5 col-sm-5 product-single-image">
									
									<div id="product-slider">
										<ul class="slides">
											<li>
												<img class="cloud-zoom" src="<?php echo PATH.'photo/photo/getindexImagefromsearch?id='.$this->data['id'];?>" data-large="<?php echo PATH.'photo/photo/getindexImagefromsearch?id='.$this->data['id'];?>" alt="" />
												<a class="fullscreen-button" href="<?php echo PATH.'photo/photo/getindexImagefromsearch?id='.$this->data['id']?>">
													<div class="product-fullscreen">
														<i class="icons icon-resize-full-1"></i>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<div id="product-carousel">
<!--										<ul class="slides">
                                                                                    	<?php //echo $this->data['moreimage']; ?>											
										</ul>
										<div class="product-arrows">
											<div class="left-arrow">
												<i class="icons icon-left-dir"></i>
											</div>
											<div class="right-arrow">
												<i class="icons icon-right-dir"></i>
											</div>
										</div>-->
									</div>
								</div>
								<!-- /Product Images Carousel -->
								
								
								<div class="col-lg-7 col-md-7 col-sm-7 product-single-info">
									
									<h2><?php echo $this->data['title'] ?></h2>
									<div class="rating-box">
										<div class="rating readonly-rating" data-score="4"></div>
										
									</div>
									<table>
										<?php echo $this->data['address'] ?>
                                                                                
										
									</table>
								</div>
							</div>
						</div>
						<!-- /Product -->
						
						
						<!-- Product Tabs -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								
								<div class="tabs">	

								
									<div class="tab-heading">
										<a href="#tab1" class="button big">Description</a>
										<a href="#tab2" class="button big">Photos</a>										
                                                                                <a href="#tab3" class="button big">Videos</a>                                                                                
                                                                                <a href="#tab4" class="button big">Map</a>
                                                                                <a href="#tab5" class="button big">Reviews</a>
									</div>
									
									<div class="page-content tab-content">			
										
										<div id="tab1">
											<p><?php echo $this->data['description'] ?></p>				
										</div>
										
										<div id="tab2">
											<?php echo $this->data['photos'] ?>
										</div>
										
										<div id="tab3">
											<?php echo $this->data['video'] ?>
										</div>
                                                                            <div id="tab4">
											<?php echo $this->data['map'] ?>
									    </div>
                                                                            <div id="tab5">
											<?php echo $this->data['comment'] ?>
									    </div>

										
									</div>
									
								</div>
								
							</div>
							
						</div>
						<!-- /Product Tabs -->
					
					</div>
                    </section>
				<!-- /Main Content -->
				
				
				
				
				<!-- Sidebar -->
				<aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
					
					<!-- Categories -->
					<div class="row sidebar-box purple">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
								<i class="icons icon-basket-2"></i>
								<h4>Categories</h4>
							</div>
							
							<div class="sidebar-box-content">
								<ul>
									<?php echo $this->data['categoryleft']; ?></ul>
							</div>
							
						</div>
							
					</div>
					<!-- /Categories -->
					
									
					
				</aside>
				<!-- /Sidebar -->
                
                
                
                <!-- Banner -->
				<section class="banner">
					
					<div class="left-side-banner banner-item icon-on-right gray">
						<h4>8(802)234-5678</h4>
						<p>Monday - Saturday: 8am - 5pm PST</p>
						<i class="icons icon-phone-outline"></i>
					</div>
					
					<a href="#">
					<div class="middle-banner banner-item icon-on-left light-blue">
						<h4>Free shipping</h4>
						<p>on all orders over $99</p>
						<span class="button">Learn more</span>
						<i class="icons icon-truck-1"></i>
					</div>
					</a>
					
					<a href="#">
					<div class="right-side-banner banner-item orange">
						<h4>Crazy sale!</h4>
						<p>on selected items</p>
						<span class="button">Shop now</span>
					</div>
					</a>
					
				</section>
				<!-- /Banner -->
				
			</div>
			<!-- /Content -->
			

			<!-- Footer -->
			<footer id="footer" class="row">
				
				
				
				<!-- Main Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="main-footer">
					
						<div class="row">
							
							<!-- Like us on Twitter -->
							<div class="col-lg-3 col-md-3 col-sm-6 twitter-widget">
								<h4>From Twitter</h4>
								<div id="twitter-widget">
                                
								</div>
                                <a href="#" class="button blue small">Follow us</a>
							</div>
					
							
							
							
							<!-- Like us on Facebook -->
							<div class="col-lg-3 col-md-3 col-sm-6 facebook-iframe">
								<h4>Like us on Facebook</h4>
                                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=250&amp;colorscheme=light&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:290px;"></iframe>
							</div>
							<!-- /Like us on Facebook -->
							
							
							
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
    	<!-- Container -->
		
		
		
	<?php include 'include/page/footer.php'; ?>