<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8">
        <title><?=$page_info['title'];?> - <?=$site_settings['title'];?></title>
        <meta name="keywords" content="<?=!empty($page_info['keywords']) ? $page_info['keywords'] : $site_settings['keywords'];?>">
        <meta name="description" content="<?=!empty($page_info['description']) ? $page_info['description'] : $site_settings['description'];?>">
        <meta name="viewport" content="width=device-width">
        <script src="/../www_site/js/jquery-1.9.0.min.js"></script>
        <script src="/../www_site/js/modernizr.2.js"></script>
        <script src="/../www_site/js/lightbox-2.6.min.js"></script>
        <link rel="stylesheet" href="/../www_site/css/lightbox.css" media="all">
        <link rel="stylesheet" href="/../www_site/css/style.css" media="all">
        <!--[if gt IE 8]><!-->
        <!--<![endif]-->
        <!--[if IE 8]>
        <link rel="stylesheet" href="/../www_site/css/ie8.css" media="all">
        <script src="/../www_site/js/respond.src.js"></script>
        <![endif]-->
        <script src="/../www_site/js/script.js"></script>
    </head>
    <body>
<div class="wrapper">
        <div class="header">
            <div class="section_inner">
                <div class="grand_line_block">
                <?if ( isset($widgets['main_slider3']['items'][0])>0):?>
                    <div class="distrib_info"><a class="grand_line_logo" href="#" style="background: url(/../upload/images/banner/<?= $widgets['main_slider3']['items'][0]['maxi']->getFilename(); ?>) no-repeat;"></a><?= $widgets['main_slider3']['items'][0]['item']->description; ?></div>                    
                <?endif;?>
                </div>

                <div class="banner_block">
                <?if ( isset($widgets['main_slider3']['items'][4])>0):?>
					<div class="distrib_info"><a class="grand_line_logo" href="#" style="background: url(/../upload/images/banner/<?= $widgets['main_slider3']['items'][4]['maxi']->getFilename(); ?>) no-repeat;"></a><?= $widgets['main_slider3']['items'][4]['item']->description; ?> </div>
                <?endif;?>
                </div>
				<div class="clr"></div>

            </div>
        </div>
	<div class="inner_navigation_section">
            <div class="section_inner">
                <div class="search_navigation inlinefix">
<!--                    <a class="logo" href="/" style="background: url(<?=$site_settings['logo'];?>) no-repeat 0 0;"></a> -->
                    <a class="logo" href="/"></a>
                    <div class="search_block">
                        <a class="search_page_link" href="/poisk"></a>
                        <div class="search_caption">Поиск по продукции:</div>
                        <div class="search_input_wrapper">
                            <? if ( isset($widgets['search_form']) ) : ?>
                                <?= $widgets['search_form']; ?>
                            <? endif; ?>
                        </div>
                        <div class="search_example">
                            например, <a class="search_simple" href="#">металлпрофиль</a>
                        </div>
                    </div>
                    <div class="contacts_block">
                        <?if ( isset($widgets['main_slider3']['items'][1])>0):?>
                            <?= $widgets['main_slider3']['items'][1]['item']->title; ?>
                            <?= $widgets['main_slider3']['items'][1]['item']->description; ?>
                        <?endif;?>
                        <?if(isset($fb_form)>0):?>
                            <a class="callback_link" href="#">закажите обратный звонок</a>
                        <?endif;?>
                    </div>
                </div>
                <a class="menu_trigger" href="#"></a>
                <ul class="nav">
                    <?=$menu;?>
                </ul>
            </div>
	</div>