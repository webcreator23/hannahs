<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>	
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo THEME_URI; ?>js/html5.js"></script>
	<![endif]-->

	
	<?php wp_head(); ?>
	<script> 

    (function($){ //create closure so we can safely use $ as alias for jQuery

    	$(document).ready(function() { 
    		$('#navigation').superfish({ 
            delay:       1000,                            // one second delay on mouseout 
            animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
            speed:       'fast',                          // faster animation speed 
            autoArrows:  true,                           // disable generation of arrow mark-up 
            dropShadows: true                            // disable drop shadows 
        }); 
    	}); 

    })(jQuery);

</script>
</head>
<body <?php body_class(); ?>>

	<div class="container site-container">
		<header class="container site-header">
			<div class="substrate top-substrate">
			<div class="ribbon"></div>
				<div class="over-picture pb-pattern cross-bold">
				<div class="box-img pb-pattern o-lines-bold over-img">
        		<img src=" <?php echo get_template_directory_uri(); ?>/images/vectorart.jpg" class="fullwidth">
			</div>
		</div>
				<!-- /.over-picture pb-pattern cross-bold -->
			</div>
			<!-- background -->
			<?php if(is_front_page() && is_page()) { ?>
			<div class="row subheader">
				<?php if(ThemexCore::getOption('header_layout')=='fullwidth') { ?>
					<div class="subheader-block">
						<?php get_template_part('module','slider'); ?>
					</div>

					<?php } else { ?>
					<div class="threecol column subheader-block">
						<?php if(is_active_sidebar('header')) { ?>
						<div class="header-widgets">
							<?php dynamic_sidebar('header'); ?>
						</div>
						<?php } else { ?>
						<div class="headercontainer">
				<div class="logo-head"><a href="<?php echo SITE_URL; ?>" rel="home">Hannahs Beach Resort</a></div>
				</div>
						<?php get_template_part('module', 'events'); ?>
						<!-- ?php get_template_part('module', 'search'); ?-->
						<?php } ?>
					</div>
					<div class="ninecol column subheader-block last">
						<div class="upheader">
						<nav class="main-navigation">
					<!-- Main Menu -->
					<ul id="navigation" class="sf-menu">
						<!-- <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor" id="menu-item-75"><a href=""><strong>Home<span>welcome</span></strong></a>
					</li> -->
					<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-64"><a href=""><strong>Accommodation<span>Rates &amp; Reservations</span></strong></a>
						<ul class="sub-menu">
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-94"><a href="">Suites, Villas &amp; Rooms</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-93"><a href="">Convention Center</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-104"><a href="">Occasion &amp; Events Hosting</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-103"><a href="">Meetings &amp; Virtual Office</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-1079"><a href="">Airport Transfers</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-3331"><a href="">Special Accommodations</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-3357"><a href="">Day Rent Room Rate</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-67"><a href=""><strong>Facilities<span>Latest News</span></strong></a>
						<ul class="sub-menu">
							<li><a href="">Hannah's Zip Line</a></li>
							<li><a href="">Solar heated swimming pool</a></li>
							<li><a href="">Infinity pool</a></li>
							<li><a href="">Infra red & spa (sauna)</a></li>
							<li><a href="">Blue Bar</a></li>
							<li><a href="">Children’s playground</a></li>
							<li><a href="">Meditation room & grotto of miraculous medal</a></li>
							<li><a href="">Picnic huts / tables / tents</a></li>
							<li><a href="">Blue lagoon tower</a></li>
							<li><a href="">Dormitories</a></li>
							<li><a href="">Convention hall / Ocean view hall / Tropical pavilion hall</a></li>
							<li><a href="">Shooting range</a></li>
							<li><a href="">Karaoke bar</a></li>
							<li><a href="">Restaurant</a></li>
							<li><a href="">Gift shop</a></li>
							<li><a href="">Lighted parking area</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-72"><a href=""><strong>Special Events<span>Celebrations</span></strong></a>
						<ul class="sub-menu">
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-71"><a href="">Birthday</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-89"><a href="">Christening</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-80"><a href="">Anniversaries</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-87"><a href="">Seminar/ Conferences</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-73"><a href="">Company Outing</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-90"><a href="">Team Building</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-88"><a href="">Sports Events</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-88"><a href="">Beauty Pagent</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-72"><a href=""><strong>Weddings<span>Ocean view</span></strong></a>
					<ul>
						<li><a href="">Ocean View<</a></li>
						<li><a href="">Blue lagoon</a></li>
						<li><a href="">Pre-nuptial photoshoot</a></li>
					</ul>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-72"><a href=""><strong>Team Buildings<span>Collaboration</span></strong></a></li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-72"><a href=""><strong>Real Adventure<span>Outdoor Activites</span></strong></a>
						<ul>
							<li><a href="">ATV – All Terrain Vehicle</a></li>
							<li><a href="">Banana boats</a></li>
							<li><a href="">Beach volleyball</a></li>
							<li><a href="">Billiards & darts</a></li>
							<li><a href="">Fishing</a></li>
							<li><a href="">Full basketball court</a></li>
							<li><a href="">Hanging bridge</a></li>
							<li><a href="">Horse back riding</a></li>
							<li><a href="">Jet ski</a></li>
							<li><a href="">Kayak</a></li>
							<li><a href="">Mountain biking</a></li>
							<li><a href="">Rubber boats</a></li>			
							<li><a href="">Shooting range</a></li>
							<li><a href="">Speed boat</a></li>
							<li><a href="">Snorkeling</a></li>
							<li><a href="">Surfing</a></li>
							<li><a href="">Zipline</a></li>
						</ul>
					</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page" id="menu-item-70"><a href=""><strong>How to get there<span>By air or land</span></strong></a></li>
					</ul>				
					<!-- .main-navigation -->
				</nav>
				</div>
						<!-- /.upheader -->
						<?php get_template_part('module','slider'); ?>
					<div class="contact-info">For Reservations: Call Wireless landline: <span class="highlight">+632-8061477 or Mobile (0928) 520-6255887 0369/ +63917-726-3510</span></div>
					</div>
					<?php } ?>
				</div>
				<!-- subheader -->
				<?php } ?>
				<div class="block-background header-background"></div>
			</header>
			<!-- header -->
			<section class="container site-content">
				<div class="row">