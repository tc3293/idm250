<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The title</title>
  <?php // https://developer.wordpress.org/reference/functions/wp_head/;?>
  <?php wp_head(); ?>
</head>

<!--this is the logo bear icon here-->
<div id="main_menu">
  <div class="logo">
    <a href=""><img src="/wp-content/themes/IDM250-theme/dist/image/bearlogo.png" alt="bear"></a>
  </div>
</div>

<br><br><br>
<!--below here is not working-->
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
