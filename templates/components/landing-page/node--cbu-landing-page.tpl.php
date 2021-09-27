<?php
//dpm($content);
$menu = menu_navigation_links('main-menu');
$is_search = module_invoke('islandora_solr', 'block_view', 'simple');
?>
<div class="hero">
  <div class="showcase-top">
    <figure class="logo">
      <img
        src="<?php print drupal_get_path('theme',$GLOBALS['theme']) ?>/dist/assets/img/scriptorium_logo.svg"
        alt=""
      />
    </figure>
    <!--<h1 class="site-title logo-color-one">Scriptori<span class="logo-color-two">UM</span></h1>-->
    <?php print render($is_search['content']); ?>
<a href="/advanced-search">advanced search</a>
  </div>
  <div class="showcase-bottom">
    <h3 class="collection-menu__title">
      <?php print $title; ?>
    </h3>
    <?php print theme('links__main-menu', array('links' =>
    $menu, 'attributes' => array('class'=> 'main-menu align-center button-group
    menu'))); ?>
  </div>
</div>

<div class="grid-container">
  <?php print $messages; ?>
  <?php print render($content['body']); ?>
  <div class="l-region l-region--above-footer">
  </div>
</div>
