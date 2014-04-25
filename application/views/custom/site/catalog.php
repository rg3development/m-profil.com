

<?if ( isset($_GET['cat'])>0):?>
<div class="main_row">
    <div class="section_inner mod_sidebar">
        <div class = 'changePlace'>
        <? if ( isset($categ) && !empty($categ) ) : ?>
            <div class="sidebar">
                <div class="sidebar_controls">
                    <a class="sidebar_trigger current" href="/catalog">Категории</a>
                </div>
                <?$flaq_index=0;?>
                <ul class="side_menu">
                    <? foreach ( $categ as $index => $category ) : ?>
                        <?if($category->id == $_GET['cat']):?>
                            <li class="side_m_item"><a class="side_m_link current" href="<?= $category->catalog_url ().'?cat='.$category->id; ?>"><?=$category->title;?></a>
                            <?$flaq_index=$index;?>
                        <?else:?>
                            <li class="side_m_item"><a class="side_m_link" href="<?= $category->catalog_url ().'?cat='.$category->id; ?>"><?=$category->title;?></a>
                        <?endif;?>
                            <?$categ2=$category->get_category_null ();?>
                            <? if ( isset($categ2[0]->title) && !empty($categ2[0]->title) ) : ?>
                                <ul class="side_m_nest">
                                    <? foreach ( $categ2 as $index2 => $product ) : ?>
                                        <?if($product->id == $_GET['cat']):?>
                                            <li class="side_m_item"><a href="<?= $category->catalog_url ().'?cat='.$product->id;  ?>" class="side_m_link current"><?=$product->title;?></a></li>
                                            <?$flaq_index2=$index2;?>
                                        <?else:?>
                                            <li class="side_m_item"><a href="<?= $category->catalog_url ().'?cat='.$product->id; ?>" class="side_m_link"><?=$product->title;?></a></li>
                                        <?endif;?>
                                    <?endforeach;?>
                                </ul>
                            <?endif;?>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>

                <div class="content_block">
                    <ul class="breadcrumbs">
                        <?$categ2=$this->catalog_mapper->get_category_sublist2($_GET['cat']);?>
                        <? if ( isset($categ2[0]->title) && !empty($categ2[0]->title) ) : ?>
                            <? foreach ( $categ2 as $index2 => $product ) : ?>
                                <?if($product->id == $_GET['cat']):?>
                                    <li class="crumb_unit"><a class="crumb_link" href="javascript:;"><?=$product->title;?></a></li>
                                <?endif;?>
                            <?endforeach;?>
                            <?if($categ[$flaq_index]->title != $categ2[0]->title):?>
                                <li class="crumb_unit"><a class="crumb_link" href="/catalog?cat=<?=$categ[$flaq_index]->id;?>"><?=$categ[$flaq_index]->title;?></a></li>
                            <?endif;?>
                        <?endif;?>

                        <li class="crumb_unit"><a class="crumb_link" href="<?= $page_info['url']; ?>"><?= $page_info['title']; ?></a></li>
                    </ul>
                    <div class="catalog_u_description"><?=$categ[$flaq_index]->description;?>
                    </div>
                    <?$categ_null=$this->catalog_mapper->get_category_sublist($_GET['cat'], 'priority', 'ASC');?>
                    <ul class="catalog_level_1">
                        <? if ( isset($categ_null) && !empty($categ_null) ) : ?>
                            <? foreach ( $categ_null as $index => $product ) : ?>
                                <li class="catalog_l_1_unit clearfix">
                                    <a href="<?= $product->category_link(); ?>" class="catalog_img_w"><div class="i-border" ><img style="height:129px;" src="<?= $product->image(); ?>"></div></a>
                                    <a href="<?= $product->category_link(); ?>" class="catalog_l_1_caption"><?= $product->title; ?></a>
                                    <div class="catalog_u_description">
                                        <?= $product->description; ?>
                                    </div>
                                </li>
                            <?endforeach;?>
                        <? else :?>

                        <? if ( isset($catalog_products) && !empty($catalog_products) ) : ?>
                            <? foreach ( $catalog_products as $index => $product ) : ?>
                                <li class="catalog_l_1_unit clearfix">
                                    <a href="<?= $product->url(); ?>" class="catalog_img_w"><div class="i-border" style="background: url('<?= $product->thumb(); ?>') 50% 50% no-repeat;"></div></a>
                                    <a href="<?= $product->url(); ?>" class="catalog_l_1_caption"><?= $product->title; ?></a>
                                    <div class="catalog_u_description">
                                        <? if($product->price() != '0.00 руб.') : ?>
                                            <span class="uprice"><?= $product->price(); ?></span><br /><br />
                                        <? endif; ?>
										<?= $product->anno; ?>
                                    </div>
                                </li>
                            <?endforeach;?>
                        <?endif; ?>
                        <? endif; ?>
                    </ul>
                </div>
            <?endif;?>
    </div>
    </div>
</div>
<?elseif ( isset($_GET['item'])>0):?>
<div class="main_row">
<?$cater2= $item->category(); ?>
	<div class="section_inner mod_sidebar">
        <div class = 'changePlace'>
		<? if ( isset($categ) && !empty($categ) ) : ?>
            <div class="sidebar">
                <div class="sidebar_controls">
                    <a class="sidebar_trigger current" href="/catalog">Категории</a>
                </div>
                <?$flaq_index=0;?>
                <ul class="side_menu">
                    <? foreach ( $categ as $index => $category ) : ?>
                        <?if($category->id == $cater2->id):?>
                            <li class="side_m_item"><a class="side_m_link current" href="<?= $category->catalog_url ().'?cat='.$category->id; ?>"><?=$category->title;?></a>
                            <?$flaq_index=$index;?>
                        <?else:?>
                            <li class="side_m_item"><a class="side_m_link" href="<?= $category->catalog_url ().'?cat='.$category->id; ?>"><?=$category->title;?></a>
                        <?endif;?>
                            <?$categ2=$category->get_category_null ();?>
                            <? if ( isset($categ2[0]->title) && !empty($categ2[0]->title) ) : ?>
                                <ul class="side_m_nest">
                                    <? foreach ( $categ2 as $index2 => $product ) : ?>
                                        <?if($product->id == $cater2->id):?>
                                            <li class="side_m_item"><a href="<?= $category->catalog_url ().'?cat='.$product->id;  ?>" class="side_m_link current"><?=$product->title;?></a></li>
                                        <?else:?>
                                            <li class="side_m_item"><a href="<?= $category->catalog_url ().'?cat='.$product->id; ?>" class="side_m_link"><?=$product->title;?></a></li>
                                        <?endif;?>
                                    <?endforeach;?>
                                </ul>
                            <?endif;?>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>
        <?endif;?>
		<div class="content_block">

			<ul class="breadcrumbs">
				<li class="crumb_unit"><a class="crumb_link" href="javascript:;"><?= $item->title; ?></a></li>
				<li class="crumb_unit"><a class="crumb_link" href="<?=$page_info['url'].'?cat='.$cater2->id;?>"><?=$cater2->title;?></a></li>
				<li class="crumb_unit"><a class="crumb_link" href="<?=$page_info['url'];?>"><?=$page_info['title'];?></a></li>
			</ul>
			<div class="product_block">
				<div class="product_img"><img src="<?= $item->image(); ?>" alt=""/></div>
			</div>
            <? if ( isset($user_values) && !empty($user_values) ) : ?>
			<div class="dimension_block">
                <div class="uprice2">
                    <? if($item->price() != '0.00 руб.') : ?>
                        Цена: <span><?=$item->price();?></span>
                    <? endif; ?>
                 </div>

                <? $flag = false;
                    foreach ( $user_values as $index => $values ) {
                    if(!empty($values['value_string']))
                    {
                        $flag = true;
                    }
                } ?>
                <? if($flag) : ?>
				    <h2 class="dimension_caption">Характеристики</h2>
                <? endif; ?>

                <div class="dimension_caption mod_1" style="padding-bottom: 0px;"></div>
                <? foreach ( $user_values as $index => $values ) : ?>
                    <? if(!empty($values['value_string'])) : ?>
                    <dl class="dimensions clearfix">
                        <dt class="dimension_unit"><?=$values['title'];?></dt>
                        <dd class="dimension_value"><?=$values['value_string'];?></dd>
                    </dl>
                    <? endif; ?>
                <?endforeach;?>

			</div>
            <?endif;?>

                    <?= $item->description(); ?>

		</div>
	</div>
    </div>
</div>
<?else:?>
<div class="main_row">
    <div class="section_inner">
        <div class="content_block">
            <ul class="breadcrumbs">
                <li class="crumb_unit"><a class="crumb_link" href="#">Каталог материалов</a></li>
            </ul>
            <div class="block_caption">
                <? if ( ! empty($text_object) ) : ?>
                    <?=$text_object->description; ?>
                <? endif; ?>
            </div>

            <? if ( isset($categ) && !empty($categ) ) : ?>
                <ul class="catalog_list">
                    <? foreach ( $categ as $index => $category ) : ?>
                        <li class="catalog_unit">
                            <a href="<?= $category->catalog_url ().'?cat='.$category->id; ?>"><div class="catalog_img_w"><img src="<?= $category->image(); ?>" style="height: 129px;" alt=""/></div>
                            <div class="catalog_u_caption"><?= $category->title; ?></div></a>
                        </li>
                    <?endforeach;?>
                </ul>
            <?endif;?>
        </div>
    </div>
</div>
<?endif;?>
