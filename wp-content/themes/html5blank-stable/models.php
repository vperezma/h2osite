<div class="row">
    <h2><?php the_title(); ?></h2>
    <?php
    $args = array(
        'post_type' => 'models',
        'posts_per_page' => -1
    );
    $loop = new WP_Query( $args );
    $loopItr = 0;
    if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post();
    ?>

    <?php if ($loopItr >= 3): $loopItr = 0; ?>
</div>
<div class="row">
    <?php endif; ?>
    <div class="col-sm-8 col-md-4 col-sm-offset-1 col-md-offset-0" id="data">
        <h3><?php the_title(); ?></h3>
        <div class="content">
        <?php the_content(); ?>
        </div>
        <?php echo types_render_field('datamod', array('output' => 'html')); ?>
    </div>
    <?php $loopItr++; endwhile; endif; ?>
</div>
<div class="row clear-all">
    <div class="col-sm-6 col-md-12" >
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default"><a href="#contact">contact us</a></button>
        </div>
    </div>
</div>