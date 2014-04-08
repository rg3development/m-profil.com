<? if (!empty($response_list)) :?>
    <ul class="reviews_block">
    <? foreach ($response_list as $key => $response) : ?>
    <li class="review_unit">
                <div class="review_author"><?=$response['title'];?>, <span class="rev_author_location"><?=$response['author'];?></span></div>
                <div class="review_text"><?=$response['description'];?></div>
    </li>
    <? endforeach; ?>
    </ul>
    <?=!empty($paginator) ? '<div class="paginator">'.$paginator.'</div>' : ''; ?>
    
<? endif; ?>
