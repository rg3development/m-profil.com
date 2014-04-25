	<div class="phone_image"><img src="/../www_site/img/front.png" alt=""/></div>
	<div class="main_row">
		<div class="section_inner">
			<div class="intro_block">
                <?if ( isset($widgets['main_slider3']['items'][2])>0):?> 
                    <?= $widgets['main_slider3']['items'][2]['item']->description; ?>
                <?endif;?>
			</div>
            <?$res=$this->diff_func_mapper->get_catalog_item(3);?>
            <?if ( isset($res[0]->id)>0):?>
                <div class="best_sales">
                    <h2 class="block_title color_blue">Хиты продаж</h2>
                    <ul class="sales_list">
                    <?foreach($res as $index=>$resurs):?>
                        <li class="sales_unit">
                            <a href="<?=$resurs->url();?>" class="sales_img"><img src="<?=$resurs->image();?>" alt=""/></a>
                            <?$res2=$resurs->category();?>
                            <div class="sale_hit_caption"><?=$res2->title;?></div><br>
                            <a class="hit_link" href="<?=$resurs->url();?>"><?=$resurs->title;?></a>
                        </li>
                    <?endforeach;?>
                    </ul>
                </div>
			<?endif;?>
			<div class="distributors_block">
				<h3 class="box_title">Наши поставшики:</h3>
				<div class="slider_wrapper">
					<span class="slider_prev"></span>
					<span class="slider_next"></span>
                    <?if ( isset($widgets['main_slider1']['items'])>0):?> 
					<div class="slider">
						<ul class="distributors_list">
                        <?foreach($widgets['main_slider1']['items'] as $key1=>$value1):?>
							<li class="distributor_unit"><a href="<?=$value1['item']->link?>"><img src="<?= base_url('/upload/images/banner/'.$value1['maxi']->getFilename()); ?>" alt=""/></a></li>
                        <?endforeach;?> 
                        <?foreach($widgets['main_slider1']['items'] as $key1=>$value1):?>
							<li class="distributor_unit"><a href="<?=$value1['item']->link?>"><img src="<?= base_url('/upload/images/banner/'.$value1['maxi']->getFilename()); ?>" alt=""/></a></li>
                        <?endforeach;?>                         
						</ul>
					</div>
                    <?endif;?>
				</div>
			</div>
			<ul class="tizer_block">
				<li class="tizer_unit">
                <?if ( isset($widgets['main_slider3']['items'][3])>0):?> 
					<h4 class="tizer_caption"><?= $widgets['main_slider3']['items'][3]['item']->title; ?></h4>                
                    <?= $widgets['main_slider3']['items'][3]['item']->description; ?>
                <?endif;?>
				</li>
                <?if ( isset($widgets['news_banner'])>0):?> 
                    <?foreach($widgets['news_banner'] as $keys=>$value2):?>
                        <?if($keys == 0):?>
                            <li class="tizer_unit">
                                <h4 class="tizer_caption">Новости и акции:</h4>
                                <div class="news_preview">
                                    <div class="date_block">
                                        <time class="news_date" datetime="2013-10-10T11:19"><?=date("d", (int)$value2['created']);?>&nbsp;<?=get_month_name((int)date("m", $value2['created']));?>&nbsp;20<?=date("y", (int)$value2['created']);?></time>
                                        <?if($value2['novelty']>0):?>
                                            <span class="label_latest">новинка</span>
                                        <?elseif($value2['action']>0):?>
                                            <span class="label_latest mod_1">акция</span>
                                        <?endif;?>
                                    </div>
                                    <?if($value2['is_spec_link']>0):?>
                                        <a class="hot_link" href="<?=$value2['spec_link']?>"><?=$value2['title'];?></a>
                                    <?else:?>
                                        <a class="hot_link" href="<?='/novosti_i_aktsii?news_id='.$value2['id']?>"><?=$value2['title'];?></a>
                                    <?endif;?>
                                </div>
                            </li>
                        <?else:?>
                            <li class="tizer_unit mod_1">
                                <div class="news_preview">
                                    <div class="date_block">
                                        <time class="news_date" datetime="2013-10-10T11:19"><?=date("d", (int)$value2['created']);?>&nbsp;<?=get_month_name((int)date("m", $value2['created']));?>&nbsp;20<?=date("y", (int)$value2['created']);?></time>
                                        <?if($value2['novelty']>0):?>
                                            <span class="label_latest">новинка</span>
                                        <?elseif($value2['action']>0):?>
                                            <span class="label_latest mod_1">акция</span>
                                        <?endif;?>
                                    </div>
                                    <?if($value2['is_spec_link']>0):?>
                                        <a class="hot_link" href="<?=$value2['spec_link']?>"><?=$value2['title'];?></a>
                                    <?else:?>
                                        <a class="hot_link" href="<?='/novosti_i_aktsii?news_id='.$value2['id']?>"><?=$value2['title'];?></a>
                                    <?endif;?>
                                </div>
                            </li>
                        <?endif;?>
                    <?endforeach;?>
                <?endif;?>
			</ul>
			
			
		</div>
	</div>