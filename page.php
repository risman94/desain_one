<?php get_header(); ?>

<div class="container c-post">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="thumbnail col-md-12 text-center">
			<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

