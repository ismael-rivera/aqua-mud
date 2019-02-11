<!DOCTYPE HTML>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        // conditionizr.config({
        //     assets: '<?php //echo get_template_directory_uri(); ?>',
        //     tests: {}
        // });
        </script>

	</head>
	<body <?php body_class(); ?>>

<div class="colorlib-loader"></div>
<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div id="colorlib-logo"><a href="index.html">Ayuda<span>Notarial</span></a>
                        </div>
                    </div>
                    <div class="col-lg-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="index.html">Home</a>
                            </li>
                            <li><a href="practice.html">Practice Areas</a>
                            </li>
                            <li><a href="won.html">Won Cases</a>
                            </li>
                            <li class="has-dropdown">	<a href="blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="#">menu 1</a>
                                    </li>
                                    <li><a href="#">menu 2</a>
                                    </li>
                                    <li><a href="#">menu 3</a>
                                    </li>
                                    <li><a href="#">menu 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                            <li class="btn-cta"><a href="#"><span>Make an Appointment</span></a>
                            </li>
                            <!-- <li class="btn-cta"><a href="#"><span>Sign Up</span></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-md-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    	<h1>We help to solve business Notary solution</h1>
                                    	<h2>Your Notary Solution starts here!</h2>
                                    <p><a class="btn btn-primary btn-lg" href="#">Make An Appointment</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-md-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    	<h1>Your Consultation &amp; Notary Sulution</h1>
                                    	<h2>Visit our sites here! <a href="#" target="_blank">ayudanotarial.com</a></h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-md-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    	<h1>It is a long established fact that with Notary Help</h1>
                                    	<h2>Visit our sites here! <a href="#" target="_blank">ayudanotarial.com</a></h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_4.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-md-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                        <h1>Contrary to popular belief, Lorem Ipsum is not Notary</h1>
                                        <h2>Visit our sites here! <a href="#" target="_blank">ayudanotarial.com</a></h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
			<!-- /header -->
