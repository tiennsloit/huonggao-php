<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="box_container">
    <div class="wap_pro clearfix">
        <div class="zoom_slick clearfix">    
            <div class="slick2 clearfix">                
                <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>"><img class='cloudzoom' src="thumb/560x600/2/<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" /></a>
                
                <?php $count=count($hinhthem); if($count>0) {?>
                <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                    <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>" ><img src="thumb/560x600/2/<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" /></a>    
                <?php }} ?>
            </div><!--.slick-->
            
         
            <?php $count=count($hinhthem); if($count>0) {?>
            <div class="slick">                
                <p><img src="thumb/100x80/1/<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" /></p>
                <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                    <p><img src="thumb/100x80/1/<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" /></p>
                <?php } ?>
            </div><!--.slick-->
            <?php } ?>
        </div><!--.zoom_slick--> 
        
        <ul class="product_info">
            <li class="ten"><?=$row_detail['ten']?></li>
            <?php if($row_detail['masp'] != '') { ?><li><b><?=_masanpham?>:</b> <?=$row_detail['masp']?></span></li><?php } ?>
            <li class="gia <?php if($row_detail['giakm'] > 0)echo 'giacu'; ?>"><?=_gia?>: <?php if($row_detail['gia'] > 0)echo number_format($row_detail['gia'],0, ',', '.').'  vnđ';else echo _lienhe; ?></li>

            <?php if($row_detail['giakm'] > 0) { ?><li class="giakm"><?=_giakm?>: <?=number_format($row_detail['giakm'],0, ',', '.').' vnđ';?> <span class="tinh_phantram">-<?=tinh_phantram($row_detail['gia'],$row_detail['giakm']);?>%</span></li><?php } ?>
            <li><b><?=_soluong?>:</b> <input type="number" value="1" class="soluong" /> </li>  

            <li><b><?=_luotxem?>:</b> <span><?=$row_detail['luotxem']?></span></li>
            <?php if($row_detail['mota'] != '') { ?><li><?=$row_detail['mota']?></li><?php } ?>
            <li><a class="dathang"><i class="fa fa-shopping-cart" aria-hidden="true"></i><?=_datmuasanpham?></a></li>
            <li><div class="addthis_inline_share_toolbox_29t6"></div></li>          
        </ul>
        <div class="clear"></div>  
  </div><!--.wap_pro-->
        
        <div id="tabs">   
            <ul id="ultabs">                 
                <li data-vitri="0"><?=_thongtinsanpham?></li>
                <li data-vitri="1"><?=_binhluan?></li>      
            </ul>
            <div style="clear:both"></div>
                            
            <div id="content_tabs">               
                <div class="tab">
                    <?=$row_detail['noidung']?>   
                    
                    <?php if(!empty($tags_sp)) { ?>
                        <div class="tukhoa">
                            <div id="tags">
                                    <span>Tags:</span>
                                    <?php foreach($tags_sp as $k=>$tags_sp_item) { ?>
                                       <a href="tags/<?=changeTitle($tags_sp_item['ten'])?>/<?=$tags_sp_item['id']?>" title="<?=$tags_sp_item['ten']?>"><?=$tags_sp_item['ten']?></a>
                                    <?php } ?>
                                <div class="clear"></div>
                            </div>                  
                        </div>   
                    <?php } ?>      
                </div> 
                
                <div class="tab">
                    <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-numposts="5" data-width="100%"></div>
                </div>  
            </div><!---END #content_tabs-->
        </div><!---END #tabs--> 
<div class="clear"></div>
</div><!--.box_containerlienhe-->

<?php if(count($product)>0) { ?>
<div class="tieude_giua"><div><?=$title_other?></div><span></span></div>
<div class="wap_item">
<?php for($i=0,$count_product=count($product);$i<$count_product;$i++) { ?>
    <div class="item item_sp">
        <div class="sp_img zoom_hinh">
            <a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>" ><img src="thumb/560x600/2/<?=_upload_sanpham_l.$product[$i]['photo']?>" onError="this.src='http://placehold.it/560x600';" alt="<?=$product[$i]['ten']?>"/></a>
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
<?php } ?>
