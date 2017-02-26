<?php get_header(); ?>

<div class="container c-post">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="thumbnail col-md-12 text-center">
			<div> <?php the_post_thumbnail('big_thumb'); ?>  </div>
			<h2> <?php the_title(); ?> </h2>
			<p><?php the_content(); ?> </p>
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

