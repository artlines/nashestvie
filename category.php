<? get_header(); ?>
<main class="mdl-layout__content">
    <div class="mdl-grid owl-carousel" id="guru-carousel">
    	<?while(have_posts()):the_post();?>
      	<div class="secondary-photo mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone item" style="background: url(<?the_post_thumbnail_url();?>) no-repeat center;">
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
