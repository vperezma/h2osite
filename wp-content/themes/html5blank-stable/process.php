<div class="process">
			<h3><?php the_title(); ?></h3>
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

					<div class="col-md-3" id="data" >

					<?php the_post_thumbnail('small', array('style' => 'clear:both; float: left; margin-right: 20px;')); ?>
					<div class="content">
					<?php the_content(); ?>
					</div>
					<div id="image"><?php echo types_render_field('image', array('output' => 'html')); ?></div>

					<div id="content"><?php echo types_render_field('step-desc', array('output' => 'html')); ?></div>


					</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>
			<div class="row clear-all">
				<div class="col-sm-6 col-md-12" >
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default"><a href="#contact">contact us</a></button>
					</div>
				</div>
			</div>
</div>