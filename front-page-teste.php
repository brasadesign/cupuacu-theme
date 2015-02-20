<html>
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
 	<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/jquery.anythingslider.js"></script>
 
	<style>
	body{
	 background-color:#777; 
	}
	#nav{
	  display:none;
	}
	.embed-container { 
	  position: relative; 
	  height: 0; overflow: hidden; max-width: 100%; height: auto; 
	} 
	.embed-container iframe, .embed-container object, .embed-container embed { 
	  position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
	}
	/*
		AnythingSlider v1.8+ Default theme
		By Chris Coyier: http://css-tricks.com
		with major improvements by Doug Neiner: http://pixelgraphics.us/
		based on work by Remy Sharp: http://jqueryfordesigners.com/
	*/

	/*****************************
	  SET DEFAULT DIMENSIONS HERE
	 *****************************/
	/* change the ID & dimensions to match your slider */
	#anythingWrap {
		width: 100%;
	  height:540px;
		list-style: none;
		/* Prevent FOUC (see FAQ page) and keep things readable if javascript is disabled */
		overflow-y: auto;
		overflow-x: hidden;
	}

	/******************
	  SET STYLING HERE
	 ******************
	 =================================
	 Default state (no keyboard focus)
	 ==================================*/
	/* Overall Wrapper */
	.anythingSlider-default {
		margin: 0 auto;
		/* 45px right & left padding for the arrows, 28px @ bottom for navigation */
		padding: 0 45px 28px 45px;
	}
	/* slider window - top & bottom borders, default state */
	.anythingSlider-default .anythingWindow {

	}
	/* Navigation buttons + start/stop button, default state */
	.anythingSlider-default .anythingControls a {
		/* top shadow */
		background: #777 url(../images/default.png) center -288px repeat-x;
		color: #000;
		border-radius: 0 0 5px 5px;
		-moz-border-radius: 0 0 5px 5px;
		-webkit-border-radius: 0 0 5px 5px;
	}
	/* Make sure navigation text is visible */
	.anythingSlider-default .anythingControls a span {
		visibility: visible;
	}
	/* Navigation current button, default state */
	.anythingSlider-default .anythingControls a.cur {
		background: #888;
		color: #000;
	}

	/* start-stop button, stopped, default state */
	.anythingSlider-default .anythingControls a.start-stop {
		background-color: #040;
		color: #ddd;
	}
	/* start-stop button, playing, default state */
	.anythingSlider-default .anythingControls a.start-stop.playing {
		background-color: #800;
	}

	/* start-stop button, default hovered text color (when visible) */
	/* hide nav/start-stop background image shadow on hover - makes the button appear to come forward */
	.anythingSlider-default .anythingControls a.start-stop:hover,
	.anythingSlider-default .anythingControls a.start-stop.hover,
	.anythingSlider-default .anythingControls a.start-stop .anythingControls ul a:hover {
		background-image: none;
		color: #ddd;
	}

	/*
	 =================================
	 Active State (has keyboard focus)
	 =================================
	*/
	/* slider window - top & bottom borders, active state */
	.anythingSlider-default.activeSlider .anythingWindow {

	}
	/* Navigation buttons, active state */
	.anythingSlider-default.activeSlider .anythingControls a {
		/* background image = top shadow */
	}
	/* Navigation current & hovered button, active state */
	.anythingSlider-default.activeSlider .anythingControls a.cur,
	.anythingSlider-default.activeSlider .anythingControls a:hover {
		/* background image removed */
	}

	/* start-stop button, stopped, active state */
	.anythingSlider-default.activeSlider .anythingControls a.start-stop {
		background-color: #080;
		color: #fff;
	}
	/* start-stop button, playing, active state */
	.anythingSlider-default.activeSlider .anythingControls a.start-stop.playing {
		background-color: #d00;
		color: #fff;
	}
	/* start-stop button, active slider hovered text color (when visible) */
	.anythingSlider-default.activeSlider .start-stop:hover,
	.anythingSlider-default.activeSlider .start-stop.hover {
		color: #fff;
	}

	/************************
	  NAVIGATION POSITIONING
	 ************************/
	/* Navigation Arrows */
	.anythingSlider-default .arrow {
		top: 50%;
		position: absolute;
		display: block;
	}

	.anythingSlider-default .arrow a {
		display: block;
		width: 45px;
		height: 140px;
		margin: -70px 0 0 0; /* half height of image */
		text-align: center;
		outline: 0;
		background: url('http://www.jqueryscript.net/demo/Powerful-Responsive-Slider-Plugin-For-jQuery-AnythingSlider/images/default.png') no-repeat;
	}

	/* back arrow */
	.anythingSlider-default .back { left: 0; }
	.anythingSlider-default .back a { background-position: left top; }
	.anythingSlider-default .back a:hover,
	.anythingSlider-default .back a.hover { background-position: left -140px; }
	/* forward arrow */
	.anythingSlider-default .forward { right: 0; }
	.anythingSlider-default .forward a { background-position: right top; }
	.anythingSlider-default .forward a:hover,
	.anythingSlider-default .forward a.hover { background-position: right -140px; }

	/* Navigation Links */
	.anythingSlider-default .anythingControls { outline: 0; display: none; }
	.anythingSlider-default .anythingControls ul { margin: 0; padding: 0; float: left; }
	.anythingSlider-default .anythingControls ul li { display: inline; }
	.anythingSlider-default .anythingControls ul a {
		font: 11px/18px Georgia, Serif;
		display: inline-block;
		text-decoration: none;
		padding: 2px 8px;
		height: 18px;
		margin: 0 5px 0 0;
		text-align: center;
		outline: 0;
	}

	/* navigationSize window */
	.anythingSlider-default .anythingControls .anythingNavWindow {
		overflow: hidden;
		float: left;
	}

	/* Autoplay Start/Stop button */
	.anythingSlider-default .anythingControls .start-stop {
		padding: 2px 5px;
		width: 40px;
		text-align: center;
		text-decoration: none;
		float: right;
		z-index: 100;
		outline: 0;
	}

	/***********************
	  IE8 AND OLDER STYLING
	 ***********************/

	/* Navigation Arrows */
	.as-oldie .anythingSlider-default .arrow {
		top: 30%;
	}
	.as-oldie .anythingSlider-default .arrow a {
		margin: 0;
	}

	/* margin between nav buttons just looks better */
	.as-oldie .anythingSlider-default .anythingControls li {
		margin-left: 3px;
	}

	/* When using the navigationSize option, the side margins need to be zero
		None of the navigation panels look good in IE7 now =( */
	.as-oldie .anythingSlider-default .anythingControls a {
		margin: 0;
	}
	.as-oldie .anythingSlider-default .anythingNavWindow {
		margin: 0 2px;
	}
	.as-oldie .anythingSlider-default .anythingNavWindow li {
		padding: 3px 0 0 0;
	}

	/***********************
	  COMMON SLIDER STYLING
	 ***********************/
	/* Overall Wrapper */
	.anythingSlider {
		display: block;
		overflow: visible !important;
		position: relative;
	}
	/* anythingSlider viewport window */
	.anythingSlider .anythingWindow {
		overflow: hidden;
		position: relative;
		width: 100%;
		height: 100%;
	}
	/* anythingSlider base (original element) */
	.anythingSlider .anythingBase {
		background: transparent;
		list-style: none;
		position: absolute;
		overflow: visible !important;
		top: 0;
		left: 0;
		margin: 0;
		padding: 0;
	}

	/* Navigation arrow text; indent moved to span inside "a", for IE7;
	  apparently, a negative text-indent on an "a" link moves the link as well as the text */
	.anythingSlider .arrow span {
		display: block;
		visibility: hidden;
	}
	/* disabled arrows, hide or reduce opacity: opacity: .5; filter: alpha(opacity=50); */
	.anythingSlider .arrow.disabled {
		display: none;
	}
	/* all panels inside the slider; horizontal mode */
	.anythingSlider .panel {
		background: transparent;
		display: block;
		overflow: hidden;
		float: left;
		padding: 0;
		margin: 0;
	}
	/* vertical mode */
	.anythingSlider .vertical .panel {
		float: none;
	}
	/* fade mode */
	.anythingSlider .fade .panel {
		float: none;
		position: absolute;
		top: 0;
		left: 0;
		z-index: 0;
	}
	/* fade mode active page - visible & on top */
	.anythingSlider .fade .activePage {
		z-index: 1;
	}

	</style>
	<script>
	$(function(){
	 	$('#slider').anythingSlider({
		expand       : true,
		autoPlay     : false,
		buildArrows  : true,
		buildStartStop : false,
		buildNavigation : false,
		/*appendControlsTo: $('#nav'),*/
		appendForwardTo     : null,
		appendBackTo        : null
		});



	});
	</script>
	
</head>
<body>	<!-- Expanding AnythingSlider 100% width -->
<div id="nav"></div>
  <div id="anythingWrap">
	<ul id="slider">
		<li>
      <div class='embed-container'>
        <img width="2048" height="1366" src="http://rede.com.br/cupuacu/wp-content/uploads/sites/3/2014/09/10679700_811612952224404_8811728882063979686_o.jpg" class="attachment-slider wp-post-image" alt="10679700_811612952224404_8811728882063979686_o" >
      </div>
    </li>
		<li>
      <div class='embed-container'><iframe src='https://player.vimeo.com/video/12155835' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
    </li>
		<li>
      <img src="http://a.vimeocdn.com/si/blog/ins_annaul-review2_newsletter.gif" />
    </li>
		<li>
    <div class='embed-container'><iframe src='https://player.vimeo.com/video/84391929' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
    </li>
	</ul>
</div>

	<!-- END AnythingSlider -->
	</body>
</html>