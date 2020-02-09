<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="wap_item clearfix">
<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	?>
    <div class="item item_sp">
        <div class="sp_img zoom_hinh">
			<img src="thumb/560x600/2/<?=_upload_sanpham_l.$product[$i]['photo']?>" onError="this.src='http://placehold.it/560x600';" alt="<?=$product[$i]['ten']?>"/>
			<div class="dathang_n"><a href="" class="dathang" data-id="<?=$product[$i]['id']?>">Thêm vào giỏ</a></div>
		</div>
        <h3 class="sp_name"><a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>" ><?=$product[$i]['ten']?></a></h3>
        <p class="sp_gia">
        	<span class="gia <?php if($product[$i]['giakm']>0)echo 'giacu'?>"><?php if($product[$i]['giakm']<=0)echo _gia.': '?><?php if($product[$i]['gia'] > 0)echo number_format($product[$i]['gia'],0, ',', '.').'  vnđ';else echo _lienhe; ?></span>
        	<?php if($product[$i]['giakm']>0) { ?><span class="giakm"><?= number_format($product[$i]['giakm'],0, ',', '.').'  vnđ';?></span><?php } ?>
        </p>
    </div><!---END .item-->
<?php } ?>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .wap_item-->