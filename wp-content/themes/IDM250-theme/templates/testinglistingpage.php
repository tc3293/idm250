<?php

/* Template Name: testing listpage work*/

echo 'This is the testing list page'

?>
<?php get_header(); ?>

<h1><?php echo get_the_title(); //get title of call home ?></h1>
<?php 
// PHP CODE TO RETRIEVE THE IMAGE URLS WOULD GO HERE
$image_urls = [
    "https://i.imgur.com/9NlbK1g.png",
    "https://i.imgur.com/9NlbK1g.png",
    "https://i.imgur.com/9NlbK1g.png",
    "https://i.imgur.com/9NlbK1g.png",
    "https://i.imgur.com/9NlbK1g.png",
    "https://i.imgur.com/9NlbK1g.png",
];
?>
<div class="image-container clearfix">
      <?php foreach ($image_urls as $url): ?>
        <!-- <img src="<?php echo $url; ?>" alt="Listing Image"> -->
      <?php endforeach; ?>
    </div>

<?php 
get_template_part('components/recent-post');
?>

<!-- <?php 
get_template_part('components/archive-listing');
?> -->


<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>