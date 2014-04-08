<? if (!empty($gallery)) :?>
<ul class="certificate_list">
        <? foreach ($gallery as $image) :?>
       <li class="certificate_unit"><a data-lightbox="image-1" title="My caption" href="<?=$path.'/'.$image['filename'];?>" ><div class="certificate_img_w"><img src="<?=$path.'/'.$image['thumbnail'];?>" alt=""></div><div class="certificate_u_caption"><?=$image['title'];?></div></a></li>
        <? endforeach; ?>
    </ul>
<?=!empty($paginator) ? '<div class="paginator">'.$paginator.'</div>' : ''; ?>
<? endif; ?>
