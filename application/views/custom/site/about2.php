
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
                </div>
            </div>
        </div>