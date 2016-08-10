<? get_header(); ?>
<main class="mdl-layout__content events">
  <div class="games__description">
 	<h1><?single_cat_title();?></h1>
 	<?=do_shortcode('[instagram-feed num=12 cols=4]' ); ?>
  </div>
</main>
<?php get_footer(); ?>
