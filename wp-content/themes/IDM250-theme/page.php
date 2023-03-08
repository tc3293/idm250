<?php get_header(); ?>
<?php 
/*page.php find this file, this is going to build for default page, find this file, this is going to build for bakery page*/
?>
<!-- THIS IS THE HERO IMAGE CODE -->
<div class="zoomme">
<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>

</div>



<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>

