<?php get_header(); ?>


<body>
<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
			<h2>Url's of CSS files</h2>
			<?php echo bloginfo('stylesheet_url'); ?>
			<?php echo bloginfo('stylesheet_directory'); ?>
			</div>
			<div class="col-md-4 col-sm-12" >

			<h2>Pages</h2>
			<hr/>
			<?php
				$args = array(
					'posts_per_page'=>12,
					'post_type'=>'page');
				$post_data = get_posts($args);
				foreach ($post_data as $post) {

				 echo get_the_title() . " <hr / >";

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
<?php get_footer();?>
 </body>
</html>