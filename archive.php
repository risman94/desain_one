<?php get_header(); ?>

<div class="container c-post">
	<?php if ( have_posts() ) : ?>
	<p class="sub_judul">
		<?php
			if(is_category()) {
				echo 'ini halaman category : '; single_cat_title();
			} 
			elseif(is_author()) {
				echo 'ini halaman author : ' . get_the_author();
			}
			else{
				echo 'halaman arsip : ';
			}
		?>
	</p>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

