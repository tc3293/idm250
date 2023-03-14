<?php

/* Template Name: Testsidebar*/

echo 'This is the testsidebar.php'

?>
<?php get_header(); ?>


<!-- TWO TYPE OF SIDEBAR I CREATE AND WITH CSS, ASK PAUL QUESTIONS ABOUT THIS -->
<div id="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <!-- If there are no widgets in this sidebar, display this message -->
        <p>Sidebar design 1 testing here</p>
    <?php endif; ?>
</div>

<aside id="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    
    <?php endif; ?>
    <p>sidebar design 2 testing here</p>
</aside>




<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>