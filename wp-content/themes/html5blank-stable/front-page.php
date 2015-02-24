<?php
/*
Template Name: custom Theme
*/
    get_header();

?>
<main role="main">
    
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section id="<?php echo $post->post_title; ?>">
       <!--  <h2><?php echo $post->post_title; ?></h2> -->
        <?php get_template_part($post->post_title); ?>
        </section>
    <?php endwhile; endif; ?>
    
</main>

<?php get_footer(); ?>
