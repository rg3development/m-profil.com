
        <div class="main_row">
            <div class="section_inner mod_sidebar">
                <div class="sidebar">                
                <?$gmenu=$this->diff_func_mapper->get_menu(319);?>
                <?if ( isset($gmenu)>0):?> 
                    <ul class="side_menu">
                    <?foreach($gmenu as $index_menu=>$submenu):?>
                        <li class="side_m_item"><a href="/<?=$submenu['url'];?>" class="side_m_link"><?=$submenu['title'];?></a></li>
                    <?endforeach;?>
                    </ul>
                </div>
                <?endif;?>
                <div class="content_block">
                    <?= $content; ?>                
                    <div class="question_block">
                        <div class="contact_form">
                        <?if ( isset($fb_form->id)>0):?>
                            <form id="contact_<?= $fb_form->id; ?>" action="" method="post">

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
        </div>