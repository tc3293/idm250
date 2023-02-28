<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/cba48a6fd7.js" crossorigin="anonymous"></script>
  <title>The title</title>
  <?php // https://developer.wordpress.org/reference/functions/wp_head/;?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('components/main_nav'); ?>
<div id="header" <?php body_class(); ?>>
<div class="header2">
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
  wp_body_open();
  ?>



