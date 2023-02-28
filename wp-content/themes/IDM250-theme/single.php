<?php get_header(); ?>

<!--THIS TESTING AND FIND WHERE THIS TEXT FROM PHP
<h1><?php //echo get_the_title(); ?></h1>
<div><?php //echo get_the_excerpt(); ?></div> -->

<div class="imager">
<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>
</div>


<div class="blog-categories">
  <?php
$currentPostId = get_the_id();
$terms = get_the_terms($currentPostId, 'category');
if ($terms) {
    foreach ($terms as $term) {
        echo "<span>{$term->name},</span>";
    }
}
?>
</div>



<?php get_template_part('components/content'); ?>

<?php get_footer(); ?>
