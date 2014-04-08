        <div class="main_row">
            <div class="section_inner">
                <div class="content_block">
                    <h1 class="content_title"><?= $page_info['title']; ?></h1>
                    <div class="contacts_list">
                        <div class="contacts_caption">ООО «Эйнсоф-Строй»</div>
                        <dl class="contacts">
                        <?if ( isset($widgets['main_slider2']['items'][0])>0):?>
                            <?foreach($widgets['main_slider2']['items'] as $key2=>$value2):?>
                                <?if($key2 == 0):?>
                                    <dt class="contact_unit"><?=$value2['item']->title;?></dt>
                                    <dd class="contact_text">
                                        <div class="contact_box"><?=$value2['item']->description;?></div>
                                        <a class="location_link" href="https://www.google.com.ua/maps/preview#!q=<?=$value2['item']->description;?>">как добраться</a>
                                    </dd>
                                <?else:?>
                                    <dt class="contact_unit"><?=$value2['item']->title;?></dt>
                                    <dd class="contact_text">
                                        <div class="contact_box"><?=$value2['item']->description;?></div>
                                    </dd>                                  
                                <?endif;?>
                            <?endforeach;?>
                        <?endif;?>
                        </dl>
                    </div>
                    
                    <div class="contact_form mod_1">
                                
                    <?if ( isset($fb_form->id)>0):?>
                        <form id="contact_<?= $fb_form->id; ?>" action="" method="post">
                            <div class="form_caption"><?= $fb_form->title; ?></div> 
                            <?= validation_errors(); ?></br>
                            <? foreach ( $fb_fields as $key => $field ) : ?>
                                <? $field_name = "fname_{$fb_form->id}_{$key}"; ?>
                                      
                                <? if ( $field->type == 4 ) : ?>
                                    <textarea class="contact_msg" name="<?= $field_name; ?>" placeholder="<?= $field->title; ?>"><?= set_value($field_name); ?></textarea>
                                    
                                <? elseif ( $field->type == 5 ) : ?>
                                    <select class="reg_input" name="<?= $field_name; ?>">
                                        <? $cur_fields = explode(',', $field->selector_val); ?>
                                        <? foreach ( $cur_fields as $key => $value ) : ?>
                                            <option value="<?= $value; ?>"><?= $value; ?></option>
                                        <? endforeach; ?>
                                    </select>
                                    
                                <? else: ?>
                                    <input type="text" class="reg_input" name="<?= $field_name; ?>" placeholder="<?= $field->title; ?>*" value='<?= set_value($field_name); ?>'>
                                    
                                <? endif; ?>
                            <? endforeach; ?>
                            <div class="popup_tip">* &mdash; поля обязательные к заполнению</div>
                            <div class="message_btn_w"><input type="submit" class="send_msg" value="Отправить" /></div>
                        </form>
                    <?endif;?>
                    </div>
                    
                </div>
            </div>
        </div>
