<?php 


function load_scripts() {
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/portfolio.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'fontawesome5','https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '5.8.1', 'all' );
	wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
	wp_enqueue_script('modernizr');

}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

	

register_nav_menus(
	array( 'main_menu' => 'Admin Menu', ) );

	

 ?>

<!-- 
	from add_action();
	wp_enqueue_scripts is the proper hook to use when enqueuing items that are meant to appear on the front end. Despite the name, it is used for enqueuing both scripts and 

	Example:

	function themeslug_enqueue_style() {
	wp_enqueue_style( 'core', 'style.css', false ); 
	}

	function themeslug_enqueue_script() {
		wp_enqueue_script( 'my-js', 'filename.js', false );
	}

	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

 -->

<!--
	add_action( string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1 )
	
	Hooks a function on to a specific action.

	Actions are the hooks that the WordPress core launches at specific points during execution, or when specific events occur. Plugins can specify that one or more of its PHP functions are executed at these points, using the Action API.

	Parameters #Parameters
	$tag
	(string) (Required) The name of the action to which the $function_to_add is hooked.

	$function_to_add
	(callable) (Required) The name of the function you wish to be called.

	$priority
	(int) (Optional) Used to specify the order in which the functions associated with a particular action are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action.

	Default value: 10

	$accepted_args
	(int) (Optional) The number of arguments the function accepts.

	Default value: 1

	-->



 <!--
	<?php #register_nav_menus( $locations ); ?> 
	Registers multiple custom navigation menus in the new custom menu editor of WordPress 3.0. This allows for the creation of custom menus in the dashboard for use in your theme.
	
	array'location slugs(key)' => 'description'
	main_menu is found in header.php wp_nav_menu.  
	Admin Menu is found in wp admin panel.
-->