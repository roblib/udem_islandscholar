<?php
$menu = menu_navigation_links('main-menu');
?>
<header class="l-header" role="banner">
  <div class="top-bar">
    <div class="top-bar-left">


          <!-- large logo -->
      <div class="udm-logo logo-wrapper">
        <a
          class="site-logo"
          href="https://www.umoncton.ca/"
          rel="home"
          title="<?php print t('Home'); ?>"
        >
    <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']) ?>/dist/assets/img/udm-logo.svg" alt=""/>
        </a>
      </div>

          <!-- small logo -->
      <div class="udm-logo mobile logo-wrapper">
        <a
          class="site-logo"
          href="https://www.umoncton.ca/"
          rel="home"
          title="<?php print t('Home'); ?>"
        >
            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']) ?>/dist/assets/img/udm-logo--mobile.svg" alt=""/>
        </a>
      </div>

          <!-- scriptorium logo -->
      <span class="scriptorium-logo"
        ><a href="/"
          ><img
            src="<?php print drupal_get_path('theme',$GLOBALS['theme']) ?>/dist/assets/img/scriptorium_logo.svg"
            alt=""/></a
      ></span>

    </div>
    <div class="top-bar-right">
      <?php print theme('links__main-menu', array('links' =>
      $menu, 'attributes' => array('class'=> 'main-menu menu')));
      ?>
      <?php if ($content): ?>
      <?php print $content; ?>
      <?php endif; ?>
      <!-- <button class="mobile-menu__button button" data-toggle="offCanvas" type="button">Open Menu</button> -->
      <span
        class="hamburger mobile-menu__button"
        data-toggle="offCanvas"
          ><img
            src="<?php print drupal_get_path('theme',$GLOBALS['theme']) ?>/dist/assets/img/menu_tablet.svg"
            alt=""/>
      ></span>
    </div>
  </div>
</header>
