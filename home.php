
<?
/*Template name: Главная*/
get_header(); 
?>
<main class="mdl-layout__content mdl-color--grey-100 home">
  <div class="mdl-grid">
    <?$posts = get_posts(array('category' => 7, 'numberposts' => 1));
      foreach($posts as $post) : setup_postdata($post);?>
          <div class="primary-photo mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--4-col-phone" style="background: url(<?the_post_thumbnail_url();?>) no-repeat center;">
            <a href="<?the_permalink();?>">
              <div class="dance_way dance_way__pole_dance" ></div>
              <div class="l-overlay"></div>
              <div class="is-hover is-hover--no-scale pole_dance--hover" style="background: url(<?the_field('hover_photo');?>) no-repeat center;"></div>
            </a>
          </div>
      <?wp_reset_postdata();endforeach;?>
          <div class=" secondary-photos mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-grid">
              <?$posts = get_posts(array('category' => 8, 'numberposts' => 4));
                $i = 0;
                foreach($posts as $post) : setup_postdata($post);
                  $file_extension = substr(get_field('hover_photo'), -3);
                  $file_extensions = array('png', 'jpg', 'tif', 'gif');
                ?>
                  <div class="secondary-photo mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(<?the_post_thumbnail_url();?>) no-repeat center;">
                    <a href="<?the_permalink();?>">
                      <div class="dance_way dance_way__<?=$post->post_name;?>"></div>
                      <div class="l-overlay"></div>
                      <?if (in_array($file_extension, $file_extensions)):?>
                        <div class="is-hover stretching--hover" style="background: url(<?the_field('hover_photo');?>) no-repeat center;"></div>
                      <?else: $i++;?>
                        <div class="is-hover <?=$post->post_name;?>--hover">
                          <video class="video" id="video-<?=$i;?>" loop mute preload="auto">
                            <source src="<?the_field('hover_photo');?>" type="video/mp4">
                          </video>
                        </div>
                      <?endif;?>
                    </a>
                  </div>

                <?wp_reset_postdata();endforeach;?>
            </div>
          </div>
        </div>
      </main>
<? get_footer(); ?>
