<html>
<head>
<title>Event Manager</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
<div id="header">
	<div class="main-heading-container"> 
		<h1>Events</h1>
	</div>
	<br><br>
	<div class="sub-heading-container"> 
		<h4>
		</h4>
	</div>
	<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
	<?php endif; ?>
</div>