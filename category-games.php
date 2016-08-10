<? get_header(); ?>
<main class="mdl-layout__content games">
    <div class="games__description">
    	<h1>Соревнования</h1>
	     <div class="mdl-grid">
			<?
			$posts = get_posts(array('category' => 9, 'numberposts' => 1));
            foreach($posts as $post) : setup_postdata($post);?>
			        <div class="games-item games-item__primary mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--4-col-phone" style="background: url(<?the_post_thumbnail_url();?>) no-repeat left;">
			        	<div class="games-item__caption"><?the_title();?></div>
		        		<a href="<?the_permalink();?>" class="game_link"></a>
			        </div>
            <?endforeach;?>
	        <div class="games-item games-item__secondary mdl-cell mdl-cell--5-col mdl-cell--12-col-tablet mdl-cell--4-col-phone">
	          <div class="mdl-grid owl-carousel" id="games-carousel">
          		<?$posts = get_posts(array('category' => '4, -9'));
                foreach($posts as $post) : setup_postdata($post);?>
	                  <div class="games-item__secondary-item item mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--4-col-phone" style="background: url(<?the_post_thumbnail_url();?>) no-repeat center;">
	                    <div class="games-item__caption"><?the_title();?></div>
		        		<a href="<?the_permalink();?>" class="game_link"></a>
	                  </div>
           		<?endforeach;?>
	          </div>
	        </div>
	    </div>
  	</div>
</main>
<?php get_footer(); ?>
