<?php get_header(); ?>


<body>
<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<h2>Url's of CSS files</h2>
				<?php echo bloginfo( 'stylesheet_url' ); ?>
				<?php echo bloginfo( 'stylesheet_directory' ); ?>
			</div>
			<div class="col-md-4 col-sm-12">


				<?php
				echo "<h2>Countries</h2><br/>";
				$countries = array(
					'post_type' => 'countries',
					'orderby'   => 'rand',
					'posts_per_page' => 1
				);


				$post_data = get_posts( $countries );
				foreach ( $post_data as $post ) {
					$link = get_permalink();
					echo '<h3><a href='.$link.'>' . get_the_title() . "</a></h3>";


				}

				echo "<br/>";

				$args = array(
					'posts_per_page' => 1,
					'post_type'      => 'post',
					'orderby'        => 'rand'

				);
				echo "<h2> Posts and Pages </h2> <br/>";
				$post_data = get_posts( $args );
				foreach ( $post_data as $post ) {

					$link = get_permalink();
					echo '<h3><a href='.$link.'>' . get_the_title() . "</a></h3>";


				}

				?>
			</div>
			<div class="col-md-4 col-sm-12">
				<?php get_sidebar(); ?>
			</div>


		</div>
	</div>
	<div id="push"></div>
</div>
<?php get_footer(); ?>
</body>
</html>