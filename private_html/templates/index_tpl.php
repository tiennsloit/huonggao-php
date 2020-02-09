<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="wap_item">
<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	?>
    <div class="item">
            <p class="sp_img zoom_hinh hover_sang1"><a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>">
            	<img src="thumb/293x293/1/<?=_upload_sanpham_l.$product[$i]['photo']?>" onError="this.src='http://placehold.it/293x293';" alt="<?=$product[$i]['ten']?>"/></a>
            </p>
            <h3 class="sp_name"><a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>" ><?=$product[$i]['ten']?></a></h3>
            <p class="sp_gia">
            	<span class="gia <?php if($product[$i]['giakm']>0)echo 'giacu'?>"><?php if($product[$i]['giakm']<=0)echo _gia.': '?><?=number_format($product[$i]['gia'],0, ',', '.').' vnđ';?></span>
            	<span class="giakm"><?php if($product[$i]['giakm']>0) echo number_format($product[$i]['giakm'],0, ',', '.').'  vnđ';?></span>
            </p>
    </div><!---END .item-->
<?php } ?>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .wap_item-->