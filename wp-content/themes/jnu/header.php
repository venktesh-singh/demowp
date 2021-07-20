<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Blog</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="images/jnu-icon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no" />
	<!--------plugin css------>
	<link href="<?php echo bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo bloginfo('template_url') ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/animate.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/icon-font.min.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/inner.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/responsive.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <div class="overlay-black"></div>
        <div class="home-page">
            <!--header section start here-->

            <header class="main-section scrolling-navbar inner-header" id="mainNav">
                <div class="container-fluid">
                    <div class="wed-logo">
					<?php if(is_single('post')){ ?>
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo bloginfo('template_url') ?>/assets/images/jnu-logo.png" class="no-fixed-logo" alt="Jaipur National University" />
                            <img src="<?php echo bloginfo('template_url') ?>/assets/images/jnu-logo.png" class="fixed-logo" alt="Jaipur National University" />
                        </a>
					<?php }else{ ?>	
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo bloginfo('template_url') ?>/assets/images/jnu-logo-inner.png" class="no-fixed-logo" alt="Jaipur National University">
							<img src="<?php echo bloginfo('template_url') ?>/assets/images/jnu-logo.png" class="fixed-logo" alt="Jaipur National University">
						 </a>
					<?php } ?>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li class="drop-down_menu about-menu">
                                <a href="" class="mm-arr Admissions-menu">Admissions <b>2021</b></a>
                            </li>
                            <li class="drop-down_menu about-menu"><a href="" class="mm-arr">Academics</a></li>
                            <li class="drop-down_menu about-menu"><a href="" class="mm-arr">Life @ JNU</a></li>
                            <li class="drop-down_menu about-menu"><a href="" class="mm-arr">About Us</a></li>

                            <li class="mobile_menu_sec">
                                <div class="humburger-menu">
                                    <div class="mobile_nav group_menu">
                                        <a href="javascript:void(0);" class="mobile_nav_icon"></a>
                                        <div class="collapse navbar-collapse main-menu" id="navbarResponsive2">
                                            <div class="others-menu">
                                                <ul>
                                                    <li><a href="">Placements</a></li>
                                                    <li><a href="">Happenings</a></li>
                                                    <li><a href="">Student's Corner</a></li>
                                                    <li><a href="">Testimonials</a></li>
                                                    <li><a href="">Blog</a></li>
                                                    <li><a href="">Online Education through Swayam</a></li>
                                                    <li><a href="">Careers</a></li>
                                                    <li><a href="">Downloads</a></li>
                                                    <li><a href="">Online Resources</a></li>
                                                    <li><a href="">Contact Us</a></li>
                                                </ul>
                                            </div>
                                            <div class="contact-link">
                                                <p><a href="tel:1800-102-1900">1800-102-1900</a></p>
                                                <p><a href="mailto:info@jnujaipur.ac.in">info@jnujaipur.ac.in</a></p>
                                            </div>
                                            <div id="accordion">
                                                <ul class="navbar-nav ml-auto">
                                                    <li class="nav-item-mobile only-mobile"><a href="" class="">About uS</a></li>
                                                    <li class="nav-item-mobile only-mobile"><a href="" class="">Why</a></li>
                                                    <li class="nav-item-mobile only-mobile">
                                                        <a href=".submenu0" class="submenu collapsed" data-toggle="collapse" data-target=".submenu0" aria-expanded="false">Academics</a>
                                                        <div aria-expanded="false" class="submenu0 collapse" data-parent="#accordion" data-toggle="#accordion">
                                                            <ul>
                                                                <li><a href="">News</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item only-mobile">
                                                        <a href=".submenu1" class="submenu collapsed" data-toggle="collapse" data-target=".submenu1" aria-expanded="false">Programmes</a>
                                                        <div aria-expanded="false" class="submenu1 collapse" data-parent="#accordion" data-toggle="#accordion">
                                                            <ul>
                                                                <li><a href="">News</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>

            

            <!--header section end here-->
