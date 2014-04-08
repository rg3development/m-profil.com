<?php if (!empty($news)) : ?>
<div class="news_block mod_1">
    <div class="news_unit clearfix">
        <div class="date_block"><time class="news_date" ><?=date("d", (int)$news['created']);?>&nbsp;<?=get_month_name((int)date("m", $news['created']));?>&nbsp;20<?=date("y", (int)$news['created']);?></time></div>
        <h2 class="news_title"><?=$news['title'];?>
        <?if($news['novelty']>0):?>
            <span class="label_latest">новинка</span>
        <?elseif($news['action']>0):?>
            <span class="label_latest mod_1">акция</span>
        <?endif;?>
        </h2>        
        <div class="product_block mod_1">
            <div class="product_img">
                <? if ( $news['filename'] ) : ?>
                    <img src="<?= IMAGESRC.'news/'.$news['filename']; ?>">
                <? endif; ?>
            </div>
        </div>        
        <div class="news_text"><?=$news['description'];?></div>
        <div class="pagination_block clearfix"><a class="go_back_button"  href="<?=base_url().$page_url.'?news_id=0&per_page='.$offset?>">Все новости</a></div>
       
    </div>
</div>
<?php endif; ?>