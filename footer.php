	<div class="sidebar" style="background-color: gray; color: #8BC34A ;">
		<div class="container">
			<div class="col-md-4">
				<nav>
					<?php 
						$args = array('theme_location' => 'footer_menu');
						wp_nav_menu($args); 
					?>
				</nav>
			</div>
			<div class="col-md-4">
				<aside>
					<?php dynamic_sidebar('sidebar1'); ?>
				</aside>
			</div>
			<div class="col-md-4">
				<aside>
					<?php dynamic_sidebar('sidebar2'); ?>
				</aside>
			</div>
		</div>
	</div>

	<footer >
		<div class="container">
			&copy <?php bloginfo( 'name' ); echo ' - '. date('Y') ?>
		</div>
	</footer>

	<?php wp_footer(); ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>