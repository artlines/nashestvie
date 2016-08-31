<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <?if (is_category()): ?>
        <title><?single_cat_title();?></title>
    <?elseif(is_page()): ?>
        <title><?the_title();?></title>
    <?endif; ?>

    <link rel="icon" href="<?=get_template_directory_uri();?>/img/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?=get_template_directory_uri();?>/img/favicon.png">
    <link rel="shortcut icon" href="<?=get_template_directory_uri();?>/img/icon.ico">
    <?wp_head(); ?>
  </head>
  <body <?body_class(); ?>>
    <div class="l-preloader" id="preloader">
      <div class="preloader__icon"></div>
    </div>
    <div class="layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
      <div class="drawer mdl-layout__drawer">
        <header class="drawer-header">
          <a href="/"><img src="<?=get_template_directory_uri();?>/img/logo.png" class="logo "></a>
        </header>
        <?wp_nav_menu( array(
            'theme_location'  => 'main_menu',
            'menu'            => 'main_menu', 
            'container'       => 'nav', 
            'container_id'    => 'main_menu',
            'menu_class'      => 'navigation mdl-navigation', 
        ));?>
          <div class="l-drawer__contacts">
            <div class="social_icons">
              <a href="<?the_field('inst');?>" class="social_icon instagram">
              </a>
              <a href="<?the_field('vk');?>" class="social_icon vk">
              </a>
            </div>
            <a href="http://web.ra-kolibri.com/"><p class="copyright">сайт РАЗРАБОТАН РА КОЛИБРИ</p></a>
          </div>
        <div class="close close__header"></div>
      </div>