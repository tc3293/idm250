<div class="content-blocks">
  <?php
if (have_posts()) {
    // Load posts loop. THIS IS PARAGRAPH PHP FOR WORDPRESS 
    while (have_posts()) {
        the_post();
        the_content();
    }
} else {
    echo 'no posts found';
}
  ?>
</div>

<div class="images">
<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>

</div>