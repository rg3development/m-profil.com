<ul class="breadcrumbs">
    <?foreach($map as $key=>$maps):?>
        <li class="crumb_unit"><a class="crumb_link" href="/<?=$maps['url'];?>"><?=$maps['title'];?></a></li>
    <?endforeach;?>

 </ul>

