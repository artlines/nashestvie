<?if ( in_category( 5 )):?>
	<main class="mdl-layout__content guru">
      <div class="mdl-grid">
        <div class="guru__photo primary-photo mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="background: url(<?the_post_thumbnail_url();?>) no-repeat left;"></div>
        <div class="guru__description mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
          <h1><?the_title();?></h1>
          <ul class="directions">
            <?
            	$what_dance = get_field('what_dance');
            	$what_dance_array = explode(',', $what_dance);
            	foreach ($what_dance_array as $value):
            ?>
            		<li><a href=""><?=$value;?></a></li>
            	<?endforeach;?>
          </ul>
          <div class="blockquote"><?the_content();?></div>
          <?
          $progress = get_field('progress');
          if (!empty($progress)):?>
          <div class="progress">
            <?
            $progress_item = explode('/', $progress);
              foreach ($progress_item as $value):
              $progress_item_row[] = explode(':', $value);
            endforeach;
              foreach ($progress_item_row as $value):
            ?>
            <div class="progress_item">
              <p class="progress_item__date"><?=$value[0];?></p>
              <p class="progress_item__description"><?=$value[1];?></p>
            </div>
            <?endforeach;?>
            <div class="clear"></div> 
          </div>
          <?endif;?>
          <?
          $vk = get_field('vk');
          if (!empty($vk)):?>
            <p class="personal_page"><a href="<?=$vk;?>">Страничка ВКонтакте</a></p>
          <?endif;?>
        </div>
      </div>
  </main>
<?elseif ( in_category( 2 )):?>
<main class="mdl-layout__content shedule_item">
  <h1><?the_title();?></h1>
    <?the_content();?>
  </main>
<?else:?>
	<main class="mdl-layout__content guru">
    <div class="mdl-grid">
      <div class="guru__photo primary-photo mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="background: url(<?the_post_thumbnail_url();?>) no-repeat left;"></div>
      <div class="guru__description mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
  	    <h1><?the_title();?></h1>
  	    <?the_content();?>
      </div>
    </div>
	</main>
<?endif; /*echo phpinfo();*/ ?>
