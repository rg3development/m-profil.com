
  <? if ( isset($comments) && !empty($comments) ): ?>

    <ul class="reviews_block">
      <? foreach ( $comments as $key => $value ) : ?>
      <li class="review_unit">
            <div class="review_author"><a href="mailto:<?= $value->email; ?>"><?= $value->name; ?></a>, <span class="rev_author_location"><?= $value->date; ?></span></div>
            <div class="review_text"><?= $value->message; ?></div>
      </li>
      <? endforeach; ?>
    </ul>
  <? endif; ?>
<div class="question_block">
    <div class="contact_form">
      <form id="comments" action="<?= $_SERVER['REQUEST_URI']. '#comments'; ?>" method="post">
                <input type="text" name="name" id="name" placeholder="Ваше имя*" class="reg_input <?=form_error('name') ? 'error_box' : ''?>" value='<?=set_value('name');?>'>
                <input type="text" name="email" id="email"  placeholder="Ваш Email*" class="reg_input <?=form_error('email') ? 'error_box' : ''?>" value='<?=set_value('email');?>'>
                <textarea name="message" id="msg" placeholder="Сообщение*" class="contact_msg <?=form_error('message') ? 'error_box' : ''?>" ><?=set_value('message');?></textarea><br />
            <div class="popup_tip mod_1">* &mdash; поля обязательные к заполнению</div>
            <div class="message_btn_w">
              <input type="submit" name="submit" class="send_msg" id="submit_btn" value="Отправить"/>          
              <? if ( validation_errors() ) : ?>
                <p class="error_text">
                  <?=validation_errors();?>
                </p>
              <? endif; ?>
            </div>
      </form>
    </div>
</div>
