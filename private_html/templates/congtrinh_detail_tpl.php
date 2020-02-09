<div class="tieude_giua"><div><?=$title_cat?></div></div>
<div class="box_container">
    <div class="content">   
    	
		<?php if(count($hinhthem) > 0) { ?>
            <link href="css/fotorama.css" rel="stylesheet">
            <script src="js/fotorama.js" type="text/javascript"></script>
            <div class="fotorama" data-nav="thumbs" data-maxheight="450" data-arrows="true" data-thumbwidth="" data-thumbheight="" data-loop="true" data-autoplay="4000" data-fit="contain" data-allowfullscreen="true" data-stopautoplayontouch="false">        
                <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                    <img src="<?=_upload_hinhthem_l.$hinhthem[$j]['photo']; ?>" />
                <?php } ?>
            </div>
        <?php } ?>
    

        <?=$row_detail['noidung']?>  
        <div class="addthis_inline_share_toolbox_29t6"></div>

        <?php if(count($tintuc) > 0) { ?>   
        <div class="othernews">
             <div class="cactinkhac">Các dự án khác</div>
             <ul>
                <?php for($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++){ ?>
                    <li><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html" title="<?=$tintuc[$i]['ten']?>"><?=$tintuc[$i]['ten']?></a> (<?=make_date($tintuc[$i]['ngaytao'])?>)</li>
                <?php }?>
             </ul>
        </div><!--.othernews-->
        <?php }?>
        
    </div><!--.content-->
</div><!--.box_container-->
         