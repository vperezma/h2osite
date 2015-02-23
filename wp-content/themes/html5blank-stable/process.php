<div class="process">
	<div class="row">
				<h1><?php the_title(); ?></h1>
			<?php
			//get the event custom post types
			$type = 'processing';
			$args = array(
				'post_type'        => $type,
				'post_status'      => 'publish',
				'order'            => 'ASC',
				'orderby'          => 'title',
				'posts_per_page'   => -1
			);
			$my_query = null;
			$my_query = new WP_Query($args);

			if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
				?>

						<div class=" col-sm-6 col-md-3 process-item"  >
							<?php the_post_thumbnail('small'); ?>

							<div class="content">
								<?php the_content(); ?>
							</div>
						</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	<div class="row clear-all">
		<div class="col-sm-6 col-md-12" >
			<div class="btn-group pull-right">
				<button type="button" class="btn btn-lg"><a href="#contact">Contact Us</a></button>
			</div>
		</div>
	</div>
</div>