<?php

	$d->reset();
	$sql_slider = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql_slider);
	$slider=$d->result_array();
	
?>
<link href="css/css_jssor_slider.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/js_jssor_slider.js"></script>

<div id="slider1_container" style="position: relative;width: 1366px; height: 450px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move;width: 1366px; height: 450px;overflow: hidden;">
        <?php for($i=0,$count_slider=count($slider);$i<$count_slider;$i++){ ?>
        <div>
            <a href="<?=$slider[$i]['link']?>"><img u="image" src="<?php if($slider[$i]['photo']!='')echo _upload_hinhanh_l.$slider[$i]['photo'];else echo 'images/noimage.png' ?>" alt="<?=$slider[$i]['ten']?>" /></a>
        </div>
        <?php } ?>                
    </div>
    <!-- Trigger -->
          
    <!-- Arrow Left -->
    <span u="arrowleft" class="jssora05l" style="top:40%;"></span>
    <!-- Arrow Right -->
    <span u="arrowright" class="jssora05r" style="top:40%;"></span>
</div><!-- Jssor Slider End -->
        

    
 