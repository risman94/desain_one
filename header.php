<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<title> <?php bloginfo( 'name' ); ?> </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <?php if ( is_singular() && get_option( 'thread_comments' ) )
    	wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
	
<body>
	<header>
		
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-left">
					<ul>
						<li>
							<a  href=" <?php echo home_url() ?> "> <?php bloginfo( 'name' ); ?> </a>
						</li>
					</ul>
				</div>
				<div class="navbar-right">
					<?php 
						$args = array('theme_location' => 'main_menu');
						wp_nav_menu($args); 
					?>
				</div>
			</div>
		</nav>
		<div class="container header text-center">
			<div class="search">
				<?php get_search_form(); ?>
			</div>
			<h1 ><a href=" <?php echo home_url() ?> "> <?php bloginfo( 'name' ); ?> </a></h1>
			<h4 class="test"> <?php bloginfo( 'description' ); ?> </h4>
		</div>
	</header>