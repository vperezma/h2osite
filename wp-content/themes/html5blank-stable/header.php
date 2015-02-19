<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
				<div class="row">
					<div class="col-md-12">
							<div class="logo col-md-7">
							</div>
							<div class="btn-group-lg">
							<div class="farmitrx" >
								<button type="button" class="btn-lg btn-default pull-right"><a href="#">Login</a></button>
							</div>
							</div>
					</div>
				</div>
					<!-- /logo -->

					<!-- nav -->
					<!-- <nav class="nav" role="navigation">

					</nav> -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" data-offset-top="80">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<a href="<?php echo home_url(); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logocut.png" alt="Logo" class="logo-img">
			</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-right navbar-nav">
        <?php	 query_posts(array(
        'post_type' => 'page',
        'posts_per_page' => 10,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ));
    ?>
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <li><a href="#<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a></li>
        <?php endwhile; endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
