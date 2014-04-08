</div>
<div class="wrapper2">
	<div class="footer">
		<div class="section_inner">
			<div class="counters_block">
				<a class="counter_unit" href="#"><img src="/../www_site/img/counter_1.jpg" alt=""/></a>
				<a class="counter_unit" href="#"><img src="/../www_site/img/arr_nw.jpg" alt=""/></a>
			</div>
			<div class="copyright">2013 Все права защищены ООО «ЭйнСоф» <br>
                <?if ( isset($widgets['main_slider2']['items'][0])>0):?>
                    <?= $widgets['main_slider2']['items'][0]['item']->description; ?>
                <?endif;?>
                </div>
			<div class="email_box">
                <?if ( isset($widgets['main_slider2']['items'][2])>0):?>
                    <?= $widgets['main_slider2']['items'][2]['item']->title; ?>&nbsp;<?= $widgets['main_slider2']['items'][2]['item']->description; ?>
                <?endif;?>
            </div>
		</div>
	</div>
</div>
<?if ( isset($fb_form->id)>0):?>
<div class="overlay">
	<div id="callback_form" class="popup_form">


        <i class="popup_close_btn"></i>

        <form id="contact_<?= $fb_form->id; ?>" action="" method="post">
        <div class="form_caption"><?= $fb_form->title; ?></div>
        <p class="error">
            <?= validation_errors(); ?></br>
        </p>
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
	</div>
</div>
<?endif;?>
<?if($_POST):?>
<script>
$('.popup_close_btn').parent().animate({'top':-800},500).parent().fadeOut(500);
$('#callback_form').animate({'top':230+$(window).scrollTop()},500).parent().css({'height':$(document).height()}).fadeIn(500);

</script>
<?endif;?>
<script>
	$(document).ready(function ($) {
		distributorSlider();
	});
</script>
</body>
</html>