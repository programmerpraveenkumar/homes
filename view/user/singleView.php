<?php require 'include/page/header.php'; 
$video='www.youtube.com/embed/rtsHlYO6TUc';
?>
		<header id="banner">
			<div id="banner_container" class="container">
				<h3 class="banner-title">Properties Listing</h3>
				<p class="banner-subtitle"></p>
			</div>
		</header>
		<div class="content-wrapper clearfix">
			<div class="container"><!-- container via hooks -->
				<div id="main" class="row-fluid">
					<section  id="content" class="span9" role="main">
						<article class="post-56 property type-property status-publish hentry clearfix" id="property-56">
							<div id="property_slider_wrapper">
								<div id="myCarousel" class="carousel slide">
									<!-- Carousel items -->
									<div class="carousel-inner">
										<div class='item active'><img src='uploads/photodune-757329-living-room-m-870x350.jpg' width='870' height='350' alt='' /></div>
										<div class='item '><img src='uploads/photodune-848938-modern-kitchen-interior-m-870x350.jpg' width='870' height='350' alt='' /></div>
										<div class='item '><img src='uploads/photodune-1288999-house-interior-m-870x350.jpg' width='870' height='350' alt='' /></div>
										<div class='item '><img src='uploads/photodune-5129397-modern-bedroom-l1-870x350.jpg' width='870' height='350' alt='' /></div>
										<div class='item '><img src='uploads/photodune-2086373-modern-house-interior-m1-870x350.jpg' width='870' height='350' alt='' /></div>
									</div>
									<div class="carousel-thumbnail">
										<!-- Carousel nav -->
										<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
										<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
										<ol class="carousel-indicators hidden-phone">
											<li data-target='#myCarousel' data-slide-to='0' class='active'><img src='uploads/photodune-757329-living-room-m-80x80.jpg' width='80' height='80' alt='' /></li>
											<li data-target='#myCarousel' data-slide-to='1' class=''><img src='uploads/photodune-848938-modern-kitchen-interior-m-80x80.jpg' width='80' height='80' alt='' /></li>
											<li data-target='#myCarousel' data-slide-to='2' class=''><img src='uploads/photodune-1288999-house-interior-m-80x80.jpg' width='80' height='80' alt='' /></li>
											<li data-target='#myCarousel' data-slide-to='3' class=''><img src='uploads/photodune-5129397-modern-bedroom-l1-80x80.jpg' width='80' height='80' alt='' /></li>
											<li data-target='#myCarousel' data-slide-to='4' class=''><img src='uploads/photodune-2086373-modern-house-interior-m1-80x80.jpg' width='80' height='80' alt='' /></li>
										</ol>
								  </div>
								</div>
							</div><!-- /#property_slider_wrapper -->
                                                        
							<div id="single_property_meta_wrapper">
								<div class="single-property-meta clearfix status-35-text">
									<span class="meta-size"><i class="ico-size"></i><?php if(isset($this->data['area']))echo $this->data['area'] ?>M</span>
									<span class="meta-bedroom"><i class="ico-bedroom"></i><?php if(isset($this->data['bedroom']))echo $this->data['bedroom'] ?><span class="meta-hidden"> Bedrooms</span></span>
									<span class="meta-bathroom"><i class="ico-bathroom"></i><?php if(isset($this->data['bathroom']))echo $this->data['bathroom'] ?><span class="meta-hidden"> Bathrooms</span></span>
									<span class="meta-garage"><i class="ico-garage"></i><?php if(isset($this->data['garages']))echo $this->data['garages'] ?><span class="meta-hidden"> Garages</span></span>
									<span class="meta-print visible-desktop"><i class="ico-print"></i>
										<span class="print-hidden"><a href="javascript:window.print()">Print this page</a></span>
									</span>
									<span class="meta-status">For Sale</span>
								</div>
							</div>
							<div class="single-property-content-wrapper">
								<header class="single-property-header">
									<h3 class="single-property-title"><?php if(isset($this->data['title']))echo $this->data['title'] ?></h3>
									<p class="single-property-address"><?php if(isset($this->data['location']))echo $this->data['location'] ?></p>
								</header>
								<div class="single-property-price">
									<p><h3><sup class="price-curr">Rs</sup><?php if(isset($this->data['price']))echo $this->data['price'] ?>&nbsp;<span class="price-postfix"></span></h3></p>
								</div>
								<div class="single-property-content">
                                                                    <p><?php if(isset($this->data['description']))echo $this->data['description'] ?></p>
								</div>
								<div class="single-property-map">
									<div id="the_map" class="map-wrap clearfix">
										<span class="map-label">Property Map</span>
										<div id="property_map"></div>
									</div>
								</div>
                                                            <div class="single-property-map">
									<div id="the_map" class="map-wrap clearfix">
                                                                            <iframe width="420" height="345" src="//<?php echo $video ?>"></iframe>
									</div>
								</div>
								<!-- Modal -->
								<div id="contactAgent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contactAgentLabel" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3>
											Send message to Agent Julianne Hough						
										</h3>
									</div>
									<div class="modal-body">
										<form id="contact-agent-form" action="#" method="post">
											<div class="controls controls-row">
												<input class="span6" name="name" type="text" placeholder="*Name " required />
												<input class="span6" name="email" type="email" placeholder="*Email" required />
											</div>
											<div class="controls">
												<textarea name="message" class="span12" rows="10" placeholder="*Message" required></textarea>
											</div>
											<div class="controls">
												<input id="submit" class="btn btn-contact" type="submit" name="submit" value="Send" />
											</div>
										</form>
									</div>
								</div>
							</div>
						</article>
					</section><!-- #content -->
					<section id="sidebar" class="span3" role="complementary">
						
						<aside id="property-search-widget-2" class="widget widget-property-search">
							<h3 class="widget-title">Property Search</h3>
							<div class="content-widget">
								<form class="advance-search-form" action="#property_search" method="get">
									<div class="option-bar location">
										<input class="input-location" type="text" name="real_location" placeholder="e.g. 21 street, Many Hill, New York" />
									</div>
									<div class="option-bar type">
										<span class="selectwrap">
											<select name="real_type" id="select-type" class="search-select">
												<option value="apartments">Apartments</option>
												<option value="bungalows">Bungalows</option>
												<option value="condominium">Condominium</option>
												<option value="villas">Villas</option>
												<option value="any" selected="selected">Type - Any</option>
											</select>
										</span>
									</div>
									<div class="option-bar status">
										<span class="selectwrap">
											<select name="real_status" id="select-status" class="search-select">
												<option value="for-rent">For Rent</option>
												<option value="for-sale">For Sale</option>
												<option value="any" selected>Status</option>
											</select>
										</span>
									</div>
									<div class="option-bar bedroom">
										<span class="selectwrap">
											<select name="real_bedroom" id="select-bedroom" class="search-select">
												<option value="1">1</option><option value="2">2</option>
												<option value="3">3</option><option value="4">4</option>
												<option value="5">5</option><option value="6">6</option>
												<option value="7">7</option><option value="8">8</option>
												<option value="9">9</option><option value="10">10</option>
												<option value="any" selected="selected">Bedroom</option>
											</select>
										</span>
									</div>
									<div class="option-bar bathroom">
										<span class="selectwrap">
											<select name="real_bathroom" id="select-bathroom" class="search-select">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="any" selected="selected">Bathroom</option>
											</select>
										</span>
									</div>
									<div class="option-bar min-price">
										<span class="selectwrap">
											<select name="min_price" id="select-min-price" class="search-select">
												<option value="1000">$1,000</option>
												<option value="5000">$5,000</option>
												<option value="10000">$10,000</option>
												<option value="50000">$50,000</option>
												<option value="100000">$100,000</option>
												<option value="200000">$200,000</option>
												<option value="300000">$300,000</option>
												<option value="400000">$400,000</option>
												<option value="500000">$500,000</option>
												<option value="600000">$600,000</option>
												<option value="700000">$700,000</option>
												<option value="800000">$800,000</option>
												<option value="900000">$900,000</option>
												<option value="1000000">$1,000,000</option>
												<option value="1500000">$1,500,000</option>
												<option value="2000000">$2,000,000</option>
												<option value="2500000">$2,500,000</option>
												<option value="5000000">$5,000,000</option>
												<option value="any" selected="selected">Min. Price</option>
											</select>
										</span>
									</div>
									<div class="option-bar max-price">
										<span class="selectwrap">
											<select name="max_price" id="select-max-price" class="search-select">
												<option value="5000">$5,000</option>
												<option value="10000">$10,000</option>
												<option value="50000">$50,000</option>
												<option value="100000">$100,000</option>
												<option value="200000">$200,000</option>
												<option value="300000">$300,000</option>
												<option value="400000">$400,000</option>
												<option value="500000">$500,000</option>
												<option value="600000">$600,000</option>
												<option value="700000">$700,000</option>
												<option value="800000">$800,000</option>
												<option value="900000">$900,000</option>
												<option value="1000000">$1,000,000</option>
												<option value="1500000">$1,500,000</option>
												<option value="2000000">$2,000,000</option>
												<option value="2500000">$2,500,000</option>
												<option value="5000000">$5,000,000</option>
												<option value="10000000">$10,000,000</option>
												<option value="any" selected="selected">Max. Price</option>
											</select>
										</span>
									</div>
									<input type="submit" name="submit" class="button button-search-widget" value="Search" />
								</form>
							</div><!-- /.content-widget -->
						</aside>
						
					</section><!-- #sidebar -->
				</div><!-- /#main -->
				<div class="single-property-related ">
					<span class="map-label">Related Property</span>
					<div class="row-fluid">
						<div class="span3">
							<article class="property-item">
								<div class="property-images">
									<a href="property-single.html" title="60 Merrick Way, Miami"><img width="540" height="360" src="uploads/photodune-280630-home-m-540x360.jpg" class="status-28 wp-post-image" alt="60 Merrick Way, Miami" title="60 Merrick Way, Miami" /></a>
									<div class="property-status status-28-text">For Rent</div>
								</div><!-- /.property-images -->
								<div class="property-attribute">
									<h3 class="attribute-title"><a href="property-single.html" title="60 Merrick Way, Miami" >60 Merrick Way, Miami</a><i class="icon-heart"></i></h3>
									<span class="attribute-city">Miami</span>
									<div class="attribute-price">
										<span class="attr-pricing"><sup class="price-curr">$</sup>5,000</span>
									</div>
								</div>
								<div class="property-meta clearfix">
									<div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">280M</span></div>
									<div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
									<div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">6</span></div>
								</div>
							</article>
						</div>
						<div class="span3">
							<article class="property-item">
								<div class="property-images">
									<a href="property-single.html" title="401 Biscayne Boulevard, Miami"><img width="540" height="360" src="uploads/photodune-921892-new-homes-m-540x360.jpg" class="status-28 wp-post-image" alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami" /></a>
									<div class="property-status status-28-text">For Rent</div>
								</div><!-- /.property-images -->
								<div class="property-attribute">
									<h3 class="attribute-title"><a href="property-single.html" title="401 Biscayne Boulevard, Miami" >401 Biscayne Boulevard, Miami</a><i class="icon-heart"></i></h3>
									<span class="attribute-city">Miami</span>
									<div class="attribute-price">
										<span class="attr-pricing"><sup class="price-curr">$</sup>45,000</span>
									</div>
								</div>
								<div class="property-meta clearfix">
									<div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">300M</span></div>
									<div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">5</span></div>
									<div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">7</span></div>
								</div>
							</article>
						</div>
						<div class="span3">
							<article class="property-item">
								<div class="property-images">
									<a href="property-single.html" title="15421 Southwest 39th Terrace"><img width="540" height="360" src="uploads/photodune-1321874-winter-rowhouses-m-540x360.jpg" class="status-28 wp-post-image" alt="15421 Southwest 39th Terrace" title="15421 Southwest 39th Terrace" /></a>
									<div class="property-status status-28-text">For Rent</div>
								</div><!-- /.property-images -->
								<div class="property-attribute">
									<h3 class="attribute-title"><a href="property-single.html" title="15421 Southwest 39th Terrace" >15421 Southwest 39th Terrace</a><i class="icon-heart"></i></h3>
									<span class="attribute-city">Miami</span>
									<div class="attribute-price">
										<span class="attr-pricing"><sup class="price-curr">$</sup>3,850</span>
									</div>
								</div>
								<div class="property-meta clearfix">
									<div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240 M</span></div>
									<div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
									<div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">2</span></div>
								</div>
							</article>
						</div>
						<div class="span3">
							<article class="property-item">
								<div class="property-images">
									<a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables"><img width="540" height="360" src="uploads/photodune-277551-home-m-540x360.jpg" class="status-35 wp-post-image" alt="1200 Anastasia Avenue, Coral Gables" title="1200 Anastasia Avenue, Coral Gables" /></a>
									<div class="property-status status-35-text">For Sale</div>
								</div><!-- /.property-images -->
								<div class="property-attribute">
									<h3 class="attribute-title"><a href="http://demo.puriwp.com/realexpert/property/1200-anastasia-avenue-coral-gables/" title="1200 Anastasia Avenue, Coral Gables" >1200 Anastasia Avenue, Coral G...</a><i class="icon-heart"></i></h3>
									<span class="attribute-city">Miami</span>
									<div class="attribute-price">
										<span class="attr-pricing"><sup class="price-curr">$</sup>5,600</span>
									</div>
								</div>
								<div class="property-meta clearfix">
									<div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
									<div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
									<div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
								</div>
							</article>
						</div>
					</div>
				</div><!-- /.single-propety-related -->
		
			</div><!-- /.container-->
		</div><!-- /.content-wrapper -->
		<section id="footer_widgets">
			<div id="footer_widget_wrapper">
				<div class="container">
					<div class="row-fluid">
						<div id="text-2" class="span4 widget widget_text">
							<h3 class="widget-title">About Real Expert</h3>
							<div class="textwidget">
								<p>Aquam est tortor, sagittis in fringilla in, pellent esque nec erat.  Aenean semper, neque non faucibus. tortor, sagittis in fringilla in, pellent esque nec eratsemper, neque non.</p>
								<p>Malesuada, dui felis tempor felis, vel varius ante diam ut mais eque non faucibus. tortor, sagittis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
							</div>
						</div>
						<div id="pages-2" class="span2 widget widget_pages">
							<h3 class="widget-title">Quick Links</h3>
							<ul>
								<li class="page_item page-item-14"><a href="#">Blog</a></li>
								<li class="page_item page-item-18"><a href="#">Contact Us</a></li>
								<li class="page_item page-item-115"><a href="#">Listing</a></li>
								<li class="page_item page-item-1864"><a href="#">Property Listing</a></li>
								<li class="page_item page-item-1681"><a href="#">Property Search</a></li>
								<li class="page_item page-item-1675"><a href="#">Special Tabs</a></li>
							</ul>
						</div>
						<div id="pages-5" class="span2 widget widget_pages">
							<h3 class="widget-title">Another Links</h3>
							<ul>
								<li class="page_item page-item-14"><a href="#">Blog</a></li>
								<li class="page_item page-item-18"><a href="#">Contact Us</a></li>
								<li class="page_item page-item-115"><a href="#">Listing</a></li>
								<li class="page_item page-item-1864"><a href="#">Property Listing</a></li>
								<li class="page_item page-item-1681"><a href="#">Property Search</a></li>
								<li class="page_item page-item-1675"><a href="#">Special Tabs</a></li>
							</ul>
						</div>
						<div id="blog-widget-2" class="span4 widget blog">
							<h3 class="widget-title">Recent Blogs</h3>
							<ul class="footer-blog">
								<li>
									<a href="#">
										<img width="70" height="60" src="uploads/1-70x60.jpg" class="alignleft wp-post-image" alt="Lectus non rutrum pulvinar urna leo dignissim lorem" />
									</a>
									<a href="#">Lectus non rutrum pulvinar urna leo dignissim lorem</a><br />
									<span class="blog-date">On : October 30, 2013</span>
								</li>
								<li>
									<a href="#">
									<img width="70" height="60" src="uploads/3-70x60.jpg" class="alignleft wp-post-image" alt="Aenean dignissim dignissim lorem pellentesque felis risus" /></a>
									<a href="#">Aenean dignissim dignissim lorem pellentesque felis risus</a><br />
									<span class="blog-date">On : September 25, 2013</span>
								</li>
							</ul>
						</div> 
					</div>
				</div>
			</div><!-- /.footer-widget-wrapper -->
		</section><!-- #footer_widgets -->
	<?php require 'include/page/footer.php'; ?>