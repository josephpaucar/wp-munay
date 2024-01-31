<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

  <?php do_action( 'storefront_before_site' ); ?>

  <?php do_action( 'storefront_before_header' ); ?>

  <header class="container mx-auto">
    <h2 class="text-xl text-center ">Munay Header</h2>
  </header>

  <?php	do_action( 'storefront_before_content' );	?>

  <div id="content" class="site-content" tabindex="-1">
		<div class="container mx-auto">

		<?php
		do_action( 'storefront_content_top' );