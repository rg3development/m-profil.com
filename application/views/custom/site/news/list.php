<? if (!empty($news_list)) :?>

    <ul class="news_block">
    <? foreach ($news_list as $key => $news) : ?>
        <li class="news_unit clearfix">
            <a href="#" class="news_img">                
            <? if ( $news['filename_thumb'] ) : ?>
                <img src="<?= IMAGESRC.'news/'.$news['filename_thumb']; ?>">
            <? endif; ?>
            </a>
            <div class="date_block">
                <time class="news_date" datetime="2013-10-10T11:19"><?=date("d", (int)$news['created']);?>&nbsp;<?=get_month_name((int)date("m", $news['created']));?>&nbsp;20<?=date("y", (int)$news['created']);?></time>
            </div>
            <a class="news_link" href="<?='/'.$page_url.'?news_id='.$news['id'].'&per_page='.$offset;?>"><?=$news['title'];?>
            <?if($news['novelty']>0):?>
                <span class="label_latest">новинка</span>
            <?elseif($news['action']>0):?>
                <span class="label_latest mod_1">акция</span>
            <?endif;?>
            </a>
            <div class="news_text"><?=strip_tags($news['anno']);?></div>
        </li>
    <? endforeach; ?>
    </ul>
    <?=!empty($paginator) ? ''.$paginator.'' : ''; ?>
 
<? endif; ?>

