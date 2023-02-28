

<?php // this is the nav menu for header
    $menu = get_theme_menu('primary-menu'); 
?>

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
    <a href=""><img src="/idm250/wp-content/themes/IDM250-theme/dist/image/bearlogo.png" alt="bear"></a>
  </div>
</div> <br> <br>
<ul id="mynav" class="header2"> 
    <!-- this is the code target header menu that loop over over again. -->
<?php foreach ($menu as $item) {
          echo '<li> <a href="' . $item->url . '" class="">' . $item->title . '</a></li>';
      }  ?> 
</ul>
</nav>