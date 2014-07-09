	<footer id="footer">
			<div class="container cleafix">
				<p class="pull-left">Copyright 2013, All Rights Reserved by <a href="http://themeforest.net/user/minimalthemes/portfolio">minimalthemes</a></p>
				<div class="pull-right">
					<ul class="footer-social">
						<li><a href="http://www.facebook.com/" title="Facebook"><i class="icon-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/" title="Twitter"><i class="icon-twitter"></i></a></li>
						<li><a href="http://feeds.feedburner.com/" title="RSS"><i class="icon-rss"></i></a></li>							
						<li><a href="http://www.plus.google.com/" title="Google Plus"><i class="icon-google-plus"></i></a></li>														
					</ul>
				</div>
			</div>
		</footer>
	</div><!-- .container-full -->
	<script type="text/javascript">
		jQuery(document).ready(function(){
		// Tab contents = .inside
			var tag_cloud_class = '#tagcloud';
			//Fix for tag clouds - unexpected height before .hide()
			var tag_cloud_height = jQuery( '#tagcloud').height();
			jQuery( '.inside ul li:last-child').css( 'border-bottom','0px' ); // remove last border-bottom from list in tab content
			jQuery( '.realTabs').each(function(){
				jQuery(this).children( 'li').children( 'a:first').addClass( 'selected' ); // Add .selected class to first tab on load
			});
			jQuery( '.inside > *').hide();
			jQuery( '.inside > *:first-child').show();
			jQuery( '.realTabs li a').click(function(evt){ // Init Click funtion on Tabs
				var clicked_tab_ref = jQuery(this).attr( 'href' ); // Strore Href value
				jQuery(this).parent().parent().children( 'li').children( 'a').removeClass( 'selected' ); //Remove selected from all tabs
				jQuery(this).addClass( 'selected' );
				jQuery(this).parent().parent().parent().children( '.inside').children( '*').hide();
				jQuery( '.inside ' + clicked_tab_ref).fadeIn(500);
				evt.preventDefault();
			});
		});
	</script>	
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/jquery.form.min.js'></script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/jpages.js'></script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>library/bootstrap/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/jquery.jcarousel.min.js'></script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/jquery.flexslider.js'></script>	
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/jquery.placeholder.js'></script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/jquery.selectbox.js'></script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/map-highlight.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var slide = {"start":"1","interval":"5000"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/real-expert.js'></script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/selectivizr.min.js'></script>
	<script type='text/javascript' src='<?php  echo INCLUDE_FILE ?>js/respond.min.js'></script>
    <script type="text/javascript">
	function test(){
            var total=document.getElementsByTagName("img");
            for(start=0;start<total.length;start++){			
                total[start].src="<?php  echo INCLUDE_FILE ?>"+total[start].getAttribute('src');
            }		
	}		
	//test();
	</script>
</body>
</html>