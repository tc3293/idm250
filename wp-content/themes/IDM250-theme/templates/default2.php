<?php

/* Template Name: Default 2*/

// echo 'This is the default2.php'

?>



<?php get_header(); ?>

<!-- FIX THIS TO MAKE DEFAULT TITLE Show up -->
<h2><?php echo get_the_title(); ?></h2>

<?php get_template_part('components/content'); ?>

<?php  
get_template_part('components/recent-6post');
?>

<?php get_footer(); ?>