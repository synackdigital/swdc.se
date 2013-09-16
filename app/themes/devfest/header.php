<?php
/**
 * @package WordPress
 * @subpackage swdc
 */
?><!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '&lsaquo;', true, 'right' ); ?></title>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cleartype" content="on">

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
