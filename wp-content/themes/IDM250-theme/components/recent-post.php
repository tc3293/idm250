<?php
/**
 * This component is used to display the recent 3 projects.
 * The projects are defined in the custom post type "projects"
 * We use the WP_Query class to get the posts.
 * @link https://developer.wordpress.org/reference/classes/wp_query/
 */

$args = [
    'post_type' => 'post', // This is the name of the custom post type we created
    'posts_per_page' => 9,
    'order' => 'DESC',
    'orderby' => 'date',
];
$project_posts_query = new WP_Query($args);

?>
<!-- <div class="image-container clearfix"> -->
<div class="container1">
<?php
        // Check if there are any posts
        if ($project_posts_query->have_posts()) {
            // Loop through the posts
            while ($project_posts_query->have_posts()) {
                // This is where the post's data is set up
                $project_posts_query->the_post();
                // This is where we include the blog card component
                // get_template_part('components/project-card');
                // echo get_the_title();
                $imgUrl = get_the_post_thumbnail_url();
                $links = get_the_permalink();
                echo "
                <div class='box'>
                <div class='imgBox'>
                <img src='{$imgUrl}' alt='img' class='image'> </div>
                <div class='content'> 
                <p><a class='content' href='{$links}'></a>Click it to find out the secret of the bread</p>
                </div></div>
                ";
            }
//  <div class='image-column'>
// <div class='image-wrapper'>
// <img class='hoveron' src='{$imgUrl}' alt='img' > 
// </a>
// <div class='view-image'> 
// <a href='{$links}'>View Post</a>
// </div></div></div>
            // Restore original Post Data
            wp_reset_postdata();
        } else {
            echo '<p>Sorry, no posts matched your criteria.</p>';
        }?>
</div>

<!-- <div class = "image">
<img src='image/png' alt = 'img' > 
</div> -->


<!-- IF ERROR AND USE THIS BACKUP:

echo "
                <a href='{$links}'>
                <img class='hoveron' src='{$imgUrl}' alt='img' > 
                </a>
                 
                ";
            
            
            -->