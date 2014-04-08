<? if ( isset($search_result) && $search_result['count'] ) : ?>
<?$value=0;?>
    <? foreach ( $search_result['text'] as $key => $result ) : ?>
        <?$value++;?>
    <? endforeach; ?>
    <? foreach ( $search_result['news'] as $key => $result ) : ?>
        <?$value++;?>
    <? endforeach; ?>
    <? foreach ( $search_result['catalog'] as $key => $result ) : ?>  
        <?$value++;?>
    <? endforeach; ?>
<div class="search_controls">				
    <div class="search_input_wrapper">
        <?=$search_form = $this->search_mapper->get_form();?>
    </div>

<div class="search_description">по вашему запросу “<strong><?= $search['value']; ?></strong>” найдено <?=$value;?><?if(($value == 1)&&($value > 4)):?>&nbsp;совпадений<?else:?>&nbsp;совпадения<?endif;?></div> 
</div>
<ul class="news_block">   
   <? foreach ( $search_result['text'] as $key => $result ) : ?>
        <li class="news_unit clearfix">
            <a class="news_link" href="<?= $result['link']; ?>">
                <?= $result['object']->title; ?>
            </a>
            <div class="news_text"><?= $result['object']->description; ?></div>
        </li>
    <? endforeach; ?>
    <? foreach ( $search_result['news'] as $key => $result ) : ?>
        <li class="news_unit clearfix">
            <a class="news_link" href="<?= $result['link']; ?>">
                <?= $result['object']->title; ?>
            </a>
            <div class="news_text"><?= $result['object']->anno; ?></div>
         </li>
    <? endforeach; ?>
    <? foreach ( $search_result['catalog'] as $key => $result ) : ?>
        <li class="news_unit clearfix">
            <a class="news_link" href="<?= $result['link']; ?>">
                <?= $result['object']->title; ?>
            </a>
            <div class="news_text"><?= $result['object']->anno; ?></div>
        </li>
    <? endforeach; ?>
</ul>
<? else: ?>
<div class="search_controls">				
    <div class="search_input_wrapper">
        <?=$search_form = $this->search_mapper->get_form();?>
    </div>

    <div class="search_description">по вашему запросу “<strong><?= $search['value']; ?></strong>” ничего не найдено.</div>  
</div>
<? endif;?>