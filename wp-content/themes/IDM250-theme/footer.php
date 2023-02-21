<br><br><br><br><br><br>
<footer>
  <div id="footer">
    <div class="footer2">
<?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
<div class ="icons">
  <p>Coming soon, Social Media icon here</p>
</div></div>


<br>
<p class="copyright"> Copyright&copy; <?php echo date('Y'); ?> 
<?php bloginfo('name'); ?> - All Right reserved By Tony Chen</p>
<br></div>



  </footer>
<?php // https://developer.wordpress.org/reference/functions/wp_footer/?>
<?php wp_footer(); ?>
</body>

</html>