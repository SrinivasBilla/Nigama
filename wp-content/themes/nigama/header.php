<?php
/**
 * Header Template
 * 
 * @package nigama
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $site_title ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans%3A300%2C400%2C700%7CTitillium%20Web%3A400%2C700&#038;display=swap" media="print" onload="this.media='all'" />
    <?php wp_head(); ?>
</head>
<body <?php body_class('hello'); ?>>
<?php
if ( function_exists('wp_body_open')) {
    wp_body_open();
}
?>
<div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">
        <?php get_template_part('template-parts/header/nav'); ?>

    </header>
    <div id="page" class="site">
    <div class="mast-bg">
