<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daniel Hunt</title>
	<!--
		/* Always have wp_head() just before the closing </head>
	     * tag of your theme, or you will break many plugins, which
	     * generally use this hook to add elements to <head> such
	     * as styles, scripts, and meta tags.
	     */
	-->
	<?php wp_head(); ?>
</head>

<!-- 
This function gives the body element different classes and can be added, typically, in the header.php’s HTML body tag.
body_class();
 -->
<body <?php body_class(); ?>>			
	<header>
		<section class="menu-area">			
			<nav class="main-menu">
				<!-- 
				Given a theme_location parameter, the function displays the menu assigned to that location. If no such location exists or no menu is assigned to it, the parameter fallback_cb will determine what is displayed.
				 -->
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
			</nav>
		</section>
	</header>



<!--
	rewuired:
	<meta name="viewport" content="width=device-width, initial-scale=1">



-->