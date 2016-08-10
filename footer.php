            <div class="get_study">
                <div class="get_study__form">
                    <div class="form_content">
                     <div class="form_head">Записаться на занятие</div>
                         <form id="order_form">
                              <div class="mdl-textfield mdl-js-textfield name">
                                <input class="mdl-textfield__input" type="text" id="name"  name="name" class=" mdl-color--white" placeholder="ВАШЕ ИМЯ">
                                <label class="mdl-textfield__label" for="name"></label>
                              </div>
                              <div class="mdl-textfield mdl-js-textfield phone">
                                <input class="mdl-textfield__input" type="text" id="phone" name="phone" placeholder="ВАШ ТЕЛЕФОН">
                                <label class="mdl-textfield__label" for="phone"></label>
                              </div>
                              <div class="mdl-textfield mdl-js-textfield direction">
                                <select class="mdl-textfield__input" type="text" id="direction"  name="direction">
                                  <option value="">Направление</option>
                                <?$directions = get_posts(array('category' => 8));
                                  foreach($directions as $direction) : setup_postdata($direction);?>
                                  <option value="<?=$direction->post_title;?>"><?=$direction->post_title;?></option>
                                  <?endforeach;?>
                                </select>
                                <label class="mdl-textfield__label" for="guru"></label>
                              </div>
                              <div class="mdl-textfield mdl-js-textfield direction">
                                <select class="mdl-textfield__input" type="text" id="guru"  name="guru">
                                  <option value="">Преподаватель</option>
                                  <?$guru = get_posts(array('category' => 5));
                                  foreach($guru as $guru_item) : setup_postdata($guru_item);?>
                                  <option value="<?=$guru_item->post_title;?>"><?=$guru_item->post_title;?></option>
                                  <?endforeach;?>
                                </select>
                                <label class="mdl-textfield__label" for="direction"></label>
                              </div>
                               <div class="mdl-textfield mdl-js-textfield direction">
                                 <input class="mdl-textfield__input" type="date" id="date" name="date" placeholder="ВАШ ТЕЛЕФОН">
                                <label class="mdl-textfield__label" for="direction"></label>
                              </div>
                              <input type="hidden" name="admin_email" value="<?= get_option( 'admin_email' )?>">
                             <input type="submit" value="Записаться" class="more">
                             <div class="out"></div>
                           </form>
                        <div class="close close__form"></div>

                    </div>
                </div>
            </div>
            <div class="get_form">записаться на занятие</div>
        </div>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>
