<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div class="container">

	<!-- site-header -->
	<header class="site-header">

<!-- Languages -->
	<?php 
	if ( is_active_sidebar( 'language1' ) ) : ?>
    <div id="language1" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>

<!-- Telefon -->
<?php if (is_active_sidebar('telefon1')) : ?>
		<div class="custom-header-widget-telephone">
		<?php dynamic_sidebar('telefon1'); ?>
		</div>
	<?php endif; ?>

	<!-- custom-logo -->
	<?php the_custom_logo(); ?>


     
	<?php endif; ?>

		<!-- hd-search -->
		<div class="hd-search">
			<?php get_search_form(); ?>
		</div><!-- /hd-search -->
	
		<nav class="site-nav">

			<?php
			$args = array(
				'theme_location' => 'primary'
			);

			?>
			<?php wp_nav_menu(  $args); ?>
		</nav>

	</header><!-- /site-header -->