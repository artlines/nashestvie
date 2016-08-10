<? get_header(); ?>
<main class="mdl-layout__content shedule">
	<div class="mdl-grid">
	 <?while(have_posts()):the_post();?>
	  <div class="primary-photo mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--4-col-phone" style="background: url(<?=wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>) no-repeat center;">
	      <div class="guru_info">
	        <h2 class="guru_info__name"><?the_title();?></h2>
	        <a href="<?the_permalink();?>" class="more">Подробнее</a>
	      </div>
	    <div class="l-overlay"></div>
	  </div>
	  <?endwhile;?>
	</div>
</main>
<?php get_footer(); ?>
