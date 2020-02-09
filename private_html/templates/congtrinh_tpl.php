<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="wap_item">
<?php for($i=0,$count_tintuc=count($tintuc);$i<$count_tintuc;$i++){	?>
    <div class="item">
            <p class="sp_img zoom_hinh hover_sang1"><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html" title="<?=$tintuc[$i]['ten']?>">
            <img src="<?php if($tintuc[$i]['thumb']!=NULL) echo _upload_tintuc_l.$tintuc[$i]['thumb']; else echo 'images/noimage.png';?>" alt="<?=$tintuc[$i]['ten']?>" /></a></p>
            <h3 class="sp_name"><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html" title="<?=$tintuc[$i]['ten']?>" ><?=$tintuc[$i]['ten']?></a></h3>
    </div><!---END .item-->
<?php } ?>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .wap_item-->