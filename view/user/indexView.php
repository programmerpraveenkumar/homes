<?php require 'include/page/header.php'; ?>
		<div class="content-wrapper clearfix">
			<div id="headline_wrapper">
				<div id="headline_container" class="container">
					<section class="headline-title">
						<h3>We bring you New and Old Properties of United States</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, facilis hic fuga iure molestiae doloremque. Voluptatibus, animi, veritatis.
						</p>
					</section>
					<section class="property-search">
						<div class="row-fluid">
							<div class="span5">
								<img class="map" src="<?php echo INCLUDE_FILE?>images/maps/usa-map.png" usemap="#usa_map" alt="usa map" />
                                				
							</div>
							<div class="span7">
								<div class="search-wrapper">
									<div class="search-title">Find Property</div>
									<div class="search-form-v1">
										
                                                                            <form name="search" action="<?php echo PATH; ?>search"  method="get" class="advance-search-form-v1 clearfix form-inline" >
										<div class="option-bar type">
												<span class="selectwrap">
													<select name="location" id="select-type" class="search-select">
													<?php if(isset($this->data['location']))echo $this->data['location']; ?>
                                                                                                        <option value="" selected="selected">Select Location</option>
                                                                                                        </select>
												</span>
											</div>	
                                                                                    
											
																						
											<div class="option-bar min-price">
												<span class="selectwrap">
													<select name="min" id="select-min-price" class="search-select">
														<option value="150">$150</option>
														
														<option value="" selected="selected">Min. Price</option>
													</select>
												</span>
											</div>
											<div class="option-bar max-price">
												<span class="selectwrap">
													<select name="max" id="select-max-price" class="search-select">
														<option value="200">$200</option>
														
														<option value="" selected="selected">Max. Price</option>
													</select>
												</span>
											</div>
											<div class="option-submit">
												
                                                                                                <input type="button"  value="Get results" onclick="search_()" />
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>	
			</div><!-- /#headline-wrapper -->
			<div id="property_list" class="container">		
				<div id="title-listing" class="container">
					<div class="property-list-title">Featured Properties</div>
					<div class="property-list-by">
						<a class="current" href="#">All</a>
						<a class="" href="#">Apartments</a>
						<a class="" href="#">Bungalows</a>
						<a class="" href="#">Condominium</a>
						<a class="" href="#">Villas</a>
					</div>
				</div><!-- /#title-listing -->
				<div class="row-fluid property-row">
					<?php if(isset($this->data['recent']))echo $this->data['recent']; ?>
					
				</div><!-- /.row-fluid -->
			</div><!-- /#property_list -->
			<!--<div id="property_info">
				<div class="container carousel-wrapper">
					<div id="recent-title-listing" class="container">
						<div class="recent-property-list-title">Recent Properties</div>
						<div class="recent-property-list-by">
							<div class="jcarousel-control">
								<a href="#" class="jcarousel-control-prev">
									<span class="icon-stack">
									  <i class="icon-stop icon-stack-base"></i>
									  <i class="icon-chevron-left"></i>
									</span>
								</a>
								<a href="#" class="jcarousel-control-next">
									<span class="icon-stack">
									  <i class="icon-stop icon-stack-base"></i>
									  <i class="icon-chevron-right"></i>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="jcarousel container">
						<div class="jcontainer">
							<div class="span3">
								<article class="property-item">
									<div class="property-images">
										<a href="property-single.html" title="Florida 5, Pinecrest, FL"><img width="540" height="360" src="uploads/photodune-1207106-american-house-m-540x360.jpg" class="status-35 wp-post-image" alt="Florida 5, Pinecrest, FL" title="Florida 5, Pinecrest, FL" /></a>
										<div class="property-status status-35-text">On Sale</div>
									</div> /.property-images 
									<div class="property-attribute">
										<h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL" >Florida 5, Pinecrest, FL</a><i class="icon-heart"></i></h3>
										<span class="attribute-city">Miami</span>
										<div class="attribute-price">
											<span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
										</div>
									</div>
									<div class="property-meta clearfix">
										<div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240M</span></div>
										<div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
										<div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
									</div>
								</article>
							</div>							
						</div> jcontainer 
					</div> 
				</div>
			</div> -->
			<div id="property_partner">
				<div class="container">
					<header class="partner-header">
						<h3 class="partner-title">Our Partners</h3>
					</header>
					<p class="partner-excerpt">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae fermentum diam, vitae gravida eros. Proin interdum imperdiet
					</p>
					<div id="partners_slider" class="partners-logo-wrapper">
						<div class="partner-list">
							<div class="partner-item">
								<a target="_blank" href="http://www.graphicriver.net/" title="graphicriver">
									<img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver" title="graphicriver" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.themeforest.net/" title="Themeforest2">
									<img width="170" height="55" src="uploads/themeforest-170x55.png" class="attachment-partners-thumb wp-post-image" alt="Themeforest2" title="Themeforest2" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.photodune.net/" title="Photodune2">
									<img width="170" height="55" src="uploads/photodune-170x55.png" class="attachment-partners-thumb wp-post-image" alt="Photodune2" title="Photodune2" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.graphicriver.net/" title="graphicriver2">
									<img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver2" title="graphicriver2" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.videohive.net/" title="videohive">
									<img width="170" height="55" src="uploads/videohive-170x55.png" class="attachment-partners-thumb wp-post-image" alt="videohive" title="videohive" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.activeden.net/" title="activeden">
									<img width="170" height="55" src="uploads/activeden-170x55.png" class="attachment-partners-thumb wp-post-image" alt="activeden" title="activeden" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.themeforest.net/" title="themeforest">
									<img width="170" height="55" src="uploads/themeforest-170x55.png" class="attachment-partners-thumb wp-post-image" alt="themeforest" title="themeforest" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.photodune.net/" title="photodune">
									<img width="170" height="55" src="uploads/photodune-170x55.png" class="attachment-partners-thumb wp-post-image" alt="photodune" title="photodune" />
								</a>
							</div>
							<div class="partner-item">
								<a target="_blank" href="http://www.graphicriver.net/" title="graphicriver">
									<img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver" title="graphicriver" />
								</a>
							</div>
						</div>
						<div class="partner-control">
							<a href="#" class="partner-prev"><span class="icon-stack"><i class="icon-stop icon-stack-base"></i><i class="icon-chevron-left"></i></span></a>
							<a href="#" class="partner-next"><span class="icon-stack"><i class="icon-stop icon-stack-base"></i><i class="icon-chevron-right"></i></span></a>
						</div>
					</div>
				</div>
			</div><!-- /#property_partner -->	
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