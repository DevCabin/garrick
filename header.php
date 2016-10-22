<?php
/**
 * @package Garrick
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/inc/clean/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS
    <link href="css/clean-blog.min.css" rel="stylesheet">
    -->

    <!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/inc/clean/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'garrick' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

	    <!-- Navigation -->
	    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
	        <div class="container-fluid">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    Menu <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand" href="<?php echo site_url(); ?>/">
	                	<?php echo get_bloginfo( 'name' ); ?>
	                </a>
	            </div>

		<?php // wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li>
	                        <a href="index.html">Home</a>
	                    </li>
	                    <li>
	                        <a href="about.html">About</a>
	                    </li>
	                    <li>
	                        <a href="post.html">Sample Post</a>
	                    </li>
	                    <li>
	                        <a href="contact.html">Contact</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
