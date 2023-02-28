<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/cba48a6fd7.js" crossorigin="anonymous"></script>
  <title>The title</title>
  <?php // https://developer.wordpress.org/reference/functions/wp_head/;?>
  <?php wp_head(); ?>
</head>




<!--below here is hamburger menu or mobile-->
<nav>
  <!--this is the logo bear icon here-->
<!--this is the logo bear icon above ^^-->
<!--below here is hamburger menu or mobile-->
  <button class="my-button" id="my-button">
  <i class="fa-solid fa-bars"></i>
  </button>

  <div id="main_menu">
  <div class="logo">
    <a href=""><img src="/wp-content/themes/IDM250-theme/dist/image/bearlogo.png" alt="bear"></a>
  </div>
</div> <br> <br>
<ul id="mynav" class="header2"> 
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
</ul>
</nav>




<div id="header" <?php body_class(); ?>>
<div class="header2">
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
  wp_body_open();
  ?>



<?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
  </div></div>
  <br><br><br><br>
<!----<header>
    <h1>Logo</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>  --->
