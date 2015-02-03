<?php

    //get the event custom post types
    $type = 'the_events';
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
        <div class="event" style="clear: both; overflow:hidden;">
            <?php the_post_thumbnail('small', array('style' => 'float: left; margin-right: 20px;')); ?>
            <h2><?php the_title(); ?></h2>
            <h2><?php the_content(); ?></h2>
            <?php echo types_render_field('desc2', array('output' => 'raw')); ?>
        </div>

<?php endwhile; endif; wp_reset_postdata(); ?>