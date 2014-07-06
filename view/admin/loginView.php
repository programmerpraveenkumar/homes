<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <!-- DNS prefetch -->
  <link rel=dns-prefetch href="//fonts.googleapis.com">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Dashboard :: NEHA - Professional &amp; Flexible Admin Template</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/style.css"> <!-- Generic style (Boilerplate) -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/960.fluid.css"> <!-- 960.gs Grid System -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/main.css"> <!-- Complete Layout and main styles -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/buttons.css"> <!-- Buttons, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/lists.css"> <!-- Lists, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/icons.css"> <!-- Icons, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/notifications.css"> <!-- Notifications, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/typography.css"> <!-- Typography -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/forms.css"> <!-- Forms, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/tables.css"> <!-- Tables, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/charts.css"> <!-- Charts, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
  <link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/neha.css"> <!-- jQuery UI, optional -->
  <script type="text/javascript" src="<?php echo INCLUDE_FILE  ?>js/validation.js"></script>
  
</head>

<body id="top">

  <!-- Begin of #container -->
  <div id="container">
  	<!-- Begin of #header -->
    <div id="header-surround"><header id="header">
    	
    	<!-- Place your logo here -->
		<img src="<?php echo ADMININCLUDE ?>img/logo.png" alt="Grape" class="logo">
		
		<!-- Divider between info-button and the toolbar-icons -->
		<div class="divider-header divider-vertical"></div>
		
		<!-- Info-Button -->
		<a href="javascript:void(0);" onclick="$('#info-dialog').dialog({ modal: true });"><span class="btn-info"></span></a>
		
			
    </header></div> <!--! end of #header -->
    
    <div class="fix-shadow-bottom-height"></div>
	
	<!-- Begin of Sidebar -->
    <aside id="sidebar">
    	
    	
    
    	
    </aside> <!--! end of #sidebar -->
    
    <!-- Begin of #main -->
    <div id="main" role="main">
    	
    	<!-- Begin of titlebar/breadcrumbs -->
		<div id="title-bar">
			</div> <!--! end of #title-bar -->
		
		<div class="shadow-bottom shadow-titlebar"></div>
		
		<!-- Begin of #main-content -->
		<div id="main-content">
                    <div style="margin-left:215px;"class="container_12">                      
                            <form class="form"  name="login" action="<?php echo ADMIN ?>validation" method="post" onsubmit="return validation('login',{0:['username','empty'],2:['password','empty']})"> 
                                <div class="separator"><label class="label">username</label><input class="textbox" type="text" name="username" /><span id="error_username"></span></div>
                               <div class="separator"><label class="label">Password</label><input  class="textbox" type="password" name="password" /><span id="error_password"></span></div>
                                <div class="submitdiv separator "><input class="submit_btn" type="submit" value="Log In" /></div> 
                            </form>
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->

    
    <footer id="footer"><div class="container_12">
		<div class="grid_12">
    		<div class="footer-icon align-center"><a class="top" href="#top"></a></div>
		</div>
    </div></footer>
  </div> <!--! end of #container -->


  
</body>
</html>