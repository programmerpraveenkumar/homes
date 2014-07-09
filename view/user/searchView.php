<?php require 'include/page/header.php'; ?>
	
		<header id="banner">
			<div id="banner_container" class="container">
				<h3 class="banner-title">Properties Listing</h3>
				<p class="banner-subtitle"></p>
			</div>
		</header>
		<div class="content-wrapper clearfix">
			<div id="title-listing" class="container">
				<div class="property-list-title">Properties Listing</div>
				<div class="property-list-by">
					<a class="current" href="#">All</a>
					<a class="" href="#">Apartments</a>
					<a class="" href="#">Bungalows</a>
					<a class="" href="#">Condominium</a>
					<a class="" href="#">Villas</a>
				</div>
			</div><!-- /#title-listing -->
			<div class="container"><!-- container via hooks -->
				<div id="main" class="row-fluid">
					<section  id="content" class="span9" role="main">
						<div id="archive-wrapper">
							<div class="property-sort">
								
								
							</div>
							<div class="row-fluid">
								<?php if(isset($this->data['search']))echo $this->data['search'] ?>
								</div><!-- /.property-listing -->
							</div>
						</div><!-- /#archive-wrapper -->
						<div class="property-pagination">
							<ul class='page-numbers'>
								<li><span class='page-numbers current'>1</span></li>
								<li><a class='page-numbers' href='#'>2</a></li>
								<li><a class="next page-numbers" href="#"><i class="icon-caret-right"></i></a></li>
							</ul>
						</div>				
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