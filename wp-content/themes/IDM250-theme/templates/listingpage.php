<?php

/* Template Name: Listing Page */

echo 'This is the ListingPage.php'

?>



<?php get_header(); ?>

<!-- FIX THIS TO MAKE DEFAULT TITLE Show up -->
<h1><?php echo get_the_title(); ?></h1>

<?php get_template_part('components/content'); ?>


<?php get_footer(); ?>