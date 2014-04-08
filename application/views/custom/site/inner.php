
        <div class="main_row">
            <div class="section_inner">
                <div class="content_block">
                <?if ( isset($_GET['news_id'])>0):?>
                    <h1 class="content_title"><a href="<?='/'.$page_url;?>"><?= $page_info['title']; ?></a></h1>
                <?else:?>
                    <h1 class="content_title"><?= $page_info['title']; ?></h1>
                <?endif;?>

                        <?= $content; ?>    
                </div>
            </div>
        </div>