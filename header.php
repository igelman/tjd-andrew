<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package 
 * @subpackage 
 * @since 
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

<!-- My stylesheet call has media attribute that Andrew's does not     <link href="<?php bloginfo('template_directory') ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
    <link href="<?php bloginfo('template_directory') ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/assets/css/fonts.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/assets/css/master.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/assets/css/margin.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/assets/bootstrap/css/padding.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?> >