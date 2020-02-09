<div class="tit_main">
    <span><?=$title_cat?></span>
</div>
<div class="wap_item">
	<?php for($i=0,$count_product=count($product);$i<$count_product;$i++) { ?>
        <div class="item">
             <p class="sp_img"><a data-fancybox href="<?=$product[$i]['link']?>">
            <img src="http://img.youtube.com/vi/<?=getYoutubeIdFromUrl($product[$i]['link'])?>/0.jpg" alt="<?=$product[$i]['ten']?>" /></a></p>
            <h3 class="sp_name"><a data-fancybox href="<?=$product[$i]['link']?>"><?=$product[$i]['ten']?></a></h3>
        </div><!---END .item-->
    <?php } ?>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .wap_item-->

