<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage AMR
 * @since AMR 1.0
 */
?>

<!--
****
**** Theme: AMR
**** Version: 1.0
**** Designer:      Tom Egan
**** Developer:     Tom Egan
**** Dev Website:   http://tom-egan.com
**** Created:       Summer 2015
**** Modified:      27 Mar 2016
**** Description:   Custom Wordpress theme for Advanced Masonry Restoration, a masonry restoration company based out of St. Paul, Minnesota
****
*-->

<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
	<!-- page title -->
	<title><?php wp_title( '| ', true, 'right' ); ?> Advanced Masonry Restoration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="designer" content="Tom Egan">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 days">
	<meta name="copyright" content="&copy;2016 Advanced Masonry Restoration">

	<meta name="keywords" content="construction, masonry, restoration, historical building, Project consultation, Brick replacement and installation, tuckpointing,Brick and stone caulking, Concrete repair, Stone repair and installation, Exterior building cleaning" />
    <meta name="description" content="Advanced Masonry Restoration | Preserving Minnesota's history and reaching new heights in masonry restoration since 1998."/>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!-- Montserrat Font (heading) -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Open Sans Font (body) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	
<!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- google maps initialize -->
    <script>
        var myCenter=new google.maps.LatLng(45.029768, -93.099955);

        function initialize()
        {
        var mapProp = {
          center:myCenter,
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          scrollwheel: false, // Disable Mouse Scroll zooming (Essential for responsive sites!)
            // All of the below are set to true by default, so simply remove if set to true:
            panControl:true, // Set to false to disable
            mapTypeControl:false, // Disable Map/Satellite switch
            scaleControl:false, // Set to false to hide scale
            streetViewControl:false, // Set to disable to hide street view
            overviewMapControl:false, // Set to false to remove overview control
            // Snazzy Maps style.
            styles:[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":60}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"lightness":30}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ef8c25"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#b6c54c"},{"lightness":40},{"saturation":-40}]},{}]
          };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker=new google.maps.Marker({
          position:myCenter,
          }

          );

        marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory');?>images/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>images/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>images/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('stylesheet_directory');?>images/favicon/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('stylesheet_directory');?>images/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<!--
****
**** NAVBAR 
****
*-->
<div class="reset"></div>
<div class="navbar navbar-inverse amr-nav">
    <!-- AMR logo -->
    <div class="logo-wrap">
        <a href="/index.php/" alt="image of AMR logo">
        	<!-- AMR Logo SVG -->
            <svg class="desktop-logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="205px" height="65px" viewBox="0 0 232.256 68.08" enable-background="new 0 0 232.256 68.08" xml:space="preserve">

            <path fill="#9A9581" d="M51.476,68.08l-4.977-9.789h-8.207v-1.614l9.192,0.008l4.978,9.783h14.107L34.603,3.558L2.625,66.468h14.102
                l5.059-9.783h9.112v1.606h-8.131l-5.058,9.789H0L34.603,0.004l17.521,34.488L69.198,68.08H51.476z M61.93,63.621l-2.622-5.152
                l-3.72-7.321l-3.715-7.321l-3.724-7.315l-3.719-7.32l-3.716-7.321l-3.726-7.32l-2.389-4.706l-2.395,4.706l-3.718,7.32l-3.723,7.321
                l-3.717,7.322l-3.722,7.313l-3.718,7.321L7.268,63.621h7.727l1.483-2.865l0.631-1.221l0.631-1.226l0.633-1.223l0.632-1.227
                l1.05-2.027h10.843l0.018-5.275l-8.147-0.033l5.034-10.034l1.095-2.152l1.091-2.146l1.095-2.156l1.094-2.147l2.425-4.771l2.417,4.77
                l1.099,2.153l1.086,2.149l1.098,2.151l1.084,2.141l5.354,10.082h-8.464l0.016,5.271h10.944l1.031,2.037l0.623,1.225l0.622,1.223
                l0.624,1.225l0.625,1.227l0.618,1.223L54,63.21l0.21,0.411H61.93z M33.898,47.062l1.399,0.006l-0.005-1.269l-0.76-4.594
                l-0.621,4.587L33.898,47.062z M42.315,46.14l-7.821-15.097l-7.62,15.077l5.48,0.01l0.386-1.736l-3.109-0.011l4.894-9.679
                l5.021,9.691l-3.138-0.004l0.401,1.735L42.315,46.14z M34.596,46.91c-0.386,0-0.698,0.069-0.698,0.151s0.312,0.152,0.698,0.152
                c0.39,0,0.705-0.07,0.705-0.152S34.986,46.91,34.596,46.91z M34.603,47.778c-0.516,0-0.938-0.073-0.98-0.159v11.534h1.965V47.619
                C35.548,47.705,35.125,47.778,34.603,47.778z M147.254,63.824v-53.56l-27.917,27.836l-27.83-27.829v53.553h6.738V26.653
                l21.091,21.09l21.013-21.101v37.182H147.254z M151.508,68.08V0.013l-32.167,32.075L87.254,0v68.08h15.245V36.923l16.844,16.844
                l16.749-16.824V68.08H151.508z M137.834,66.337v-33.61l-18.496,18.576l-18.581-18.586v33.62H88.996V4.205l30.344,30.347
                l30.427-30.34v62.125H137.834L137.834,66.337z M206.771,33.001c2.535,0,4.662-0.895,6.506-2.737
                c1.842-1.844,2.736-4.004,2.736-6.602c0-2.537-0.896-4.667-2.736-6.512c-1.844-1.841-3.973-2.736-6.512-2.736h-19.787v18.504
                L206.771,33.001z M188.578,31.32V16.014h18.187c2.092,0,3.852,0.743,5.379,2.27c1.525,1.527,2.269,3.286,2.269,5.378
                c0,2.155-0.742,3.943-2.269,5.468c-1.527,1.527-3.283,2.271-5.367,2.271L188.578,31.32z M232.256,68.08l-13.767-23.978
                c2.986-1.709,5.548-4.095,7.615-7.095c2.773-3.99,4.18-8.479,4.18-13.347c0-6.42-2.328-12.006-6.922-16.602
                c-4.594-4.591-10.178-6.918-16.598-6.918h-33.969V68.08h15.781v-20.81h13.381l12.072,20.81H232.256z M214.952,66.478l-12.07-20.808
                h-15.904v20.808h-12.58V1.746h32.367c5.982,0,11.187,2.17,15.467,6.448c4.281,4.283,6.453,9.486,6.453,15.468
                c0,4.532-1.311,8.716-3.895,12.437c-2.18,3.158-4.926,5.576-8.16,7.187l-0.357,0.178l13.218,23.017h-14.538V66.478z M224.972,63.865
                l-12.445-21.677l1.604-0.646c3.428-1.381,6.29-3.713,8.514-6.938c2.271-3.271,3.424-6.953,3.424-10.942
                c0-2.64-0.478-5.119-1.416-7.37c-0.94-2.254-2.375-4.356-4.269-6.249c-1.893-1.892-3.995-3.328-6.249-4.268
                c-2.253-0.94-4.73-1.417-7.369-1.417h-29.754v59.506h7.354V43.056h20.023l12.07,20.811L224.972,63.865L224.972,63.865z
                 M184.362,11.799h22.402c3.217,0,6.029,1.179,8.358,3.505c2.325,2.327,3.503,5.139,3.503,8.358c0,3.281-1.178,6.125-3.503,8.45
                c-2.325,2.323-5.14,3.503-8.366,3.503l-22.395-0.097V11.799L184.362,11.799z"/>
            </svg>

            <!-- mobile logo -->
            <svg class="mobile-logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="32px" viewBox="0 0 162.503 47.646" enable-background="new 0 0 162.503 47.646" xml:space="preserve">
                <path fill="#9A9581" d="M34.808,39.682h-21.9l-4.051,7.964H0L23.823,0l23.823,47.646H38.79L34.808,39.682z M16.82,31.787h14.005
                l-7.002-14.005L16.82,31.787z M69.271,19.155v28.491h-7.896V0l23.823,23.823L109.09,0v47.646h-8.033V19.155L85.199,35.083
                L69.271,19.155z M153.372,47.646l-9.199-15.859h-13.456v15.859h-7.896V0h23.823c4.348,0,8.077,1.557,11.19,4.668
                c3.112,3.113,4.668,6.843,4.668,11.191c0,3.295-0.938,6.293-2.814,8.994c-1.831,2.655-4.165,4.555-7.003,5.698l9.817,17.095H153.372
                z M146.645,7.964h-15.928v15.791l15.928,0.069c2.15,0,4.004-0.778,5.561-2.334c1.556-1.555,2.334-3.433,2.334-5.629
                c0-2.151-0.778-4.004-2.334-5.561C150.648,8.743,148.795,7.964,146.645,7.964z"/>
            </svg>
        </a> <!--/ Logo Link -->
    </div> <!--/ Logo Wrap -->

    <!-- hamburger icon -->          
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        <h3>Menu</h3> 
        <!-- These 3 spans create the hamburger icon -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    

    <!-- navbar links -->
    <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-left">

            <!-- HOME -->
            <li>
                <a href="/index.php/">Home
                    <div class="link-underline"></div>
                </a>
            </li> <!--/home -->         

            <!-- ABOUT -->
            <li>
                <a href="/index.php/about">About
                    <div class="link-underline"></div>
                </a>
            </li> 

            <!-- PROCESS --> 
            <li>
                <a href="/index.php/services">Services
                    <div class="link-underline"></div>
                </a>
            </li>

            <!-- PROJECTS -->
            <li>
                <a href="/index.php/projects">Projects
                    <div class="link-underline"></div>
                </a>
            </li>

            <!-- CONTACT -->
            <li>
                <a href="/index.php/contact">Contact
                    <div class="link-underline"></div>
                </a>
            </li>
        </ul><!--/ end ul / nav links -->

        <!-- phone number -->
        <div class="nav-phone-number">
            <span>
                <svg fill="#9A9581" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                </svg>
            </span>
            <h3>651.766.8080</h3>
        </div>

    </div><!--/ end navbar links wrapper -->
</div><!--/ end navbar -->