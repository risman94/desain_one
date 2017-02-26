<div class="thumbnail col-md-12">
	<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
	<div><?php the_post_thumbnail('small_thumb'); ?></div>
	<p>
		<a href=" <?php the_permalink(); ?> "> <?php echo get_the_excerpt(); ?> </a> 
			<p class="info_meta">
			<a href=" <?php echo get_author_posts_url(get_the_author_meta('ID')); ?> "> <?php the_author(); ?> </a>
			<?php 
				echo ' || ';
				the_time('F j,Y') ?> at <?php the_time('g:i a');
				echo ' || kategori : ';
				the_category(', ');
			?>
		</p>
	</p>
</div>