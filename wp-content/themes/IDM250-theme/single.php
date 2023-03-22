
<?php get_header(); ?>

<!-- THIS TESTING AND FIND WHERE THIS TEXT FROM PHP -->
<h1><?php echo get_the_title(); ?></h1>
<!-- <div><?php echo get_the_excerpt(); ?></div> -->

<div class="imager">
<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>
</div>

<!-- THIS IS THE TEMPLATE HOW TO CREATE CATEGORY -->
<!-- <div class="blog-categories">
  <?php
$currentPostId = get_the_id();
$terms = get_the_terms($currentPostId, 'category');
if ($terms) {
    foreach ($terms as $term) {
        echo "<span1>{$term->name},</span1>";
    }
}
?>
</div> -->

<?php while (have_posts()) : the_post(); ?>
<!-- 
<aside id="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php endif; ?>
    <p>sadsad</p>
</aside>
 -->

  <div class="post">
    <div class="entry">
      <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; ?>


<!-- THIS IS GET TEMPLATE ON SINGLE.PHP <?php get_template_part('components/content'); ?> -->

<?php get_footer(); ?>
