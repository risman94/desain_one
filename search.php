<?php get_header(); ?>

<div class="container c-post">
	<?php if ( have_posts() ) : ?>
	<p class="sub_judul">
		Halaman Pencari
	</p>
	<?php 
		while ( have_posts() ) : the_post(); 
		if($post->post_type == 'page') continue;
	?>
		<?php get_template_part('content'); ?>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

