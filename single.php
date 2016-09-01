<?php
/**
 * Created by PhpStorm.
 * User: martin.benes
 * Date: 2016-09-01
 * Time: 11:54 AM
 */

get_header();

?>



<div id="wrap">

	<div class="container">
		<div class="row">

			<div class=" col-sm-12 col-md-4 " >

					<h3>Awesome text</h3>

			</div>
			<div class="col-sm-12 col-md-4">

				<?php
				echo "<h2>" . get_the_title() . "</h2>";
				echo "<h4>" . get_the_date() . "</h4>";

				echo "<section >";
				echo "Categories ";
				the_category(' | ');
				echo "<br/>";

				the_tags('tags: ', ' | ');

				echo "</section>";


				if(have_posts()):
				while(have_posts()) : the_post();
				the_content();
				endwhile;
				endif;


				?>

			</div>

			<div class=" col-sm-12 col-md-4">

				<?php

				get_sidebar();

				?>

			</div>


		</div>
	</div>
	<div id="push"></div>
</div>


<?php get_footer(); ?>








