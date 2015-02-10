<div class="process">
			<h2><?php the_title(); ?></h2>
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

					<div class="col-md-3">

					<?php the_post_thumbnail('small', array('style' => 'clear:both; float: left; margin-right: 20px;')); ?>

					<h2><?php the_content(); ?></h2>
					<?php echo types_render_field('image', array('output' => 'html')); ?>
					<?php echo types_render_field('step-desc', array('output' => 'html')); ?>

					</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>
			<div class="row">
				<div class="col-md-12" >
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default"><a href="#contact">contact us</a></button>
					</div>
				</div>
			</div>
	<div class="toggler">
		<div id="effect" class="ui-widget-content ui-corner-all">
			<h3 class="ui-widget-header ui-corner-all">Hide</h3>
			<p>
				Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
			</p>
		</div>
	</div>

	<select name="effects" id="effectTypes">
		<option value="blind">Blind</option>
	</select>

	<button id="button" class="ui-state-default ui-corner-all">Run Effect</button>

</div>