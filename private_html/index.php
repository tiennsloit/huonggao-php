<?php
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    
	session_start();
	$session=session_id();

	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	
	include_once _lib."Mobile_Detect.php";
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	
	$lang_default = array("","en");
	if(!isset($_SESSION['lang']) or !in_array($_SESSION['lang'], $lang_default))
	{
		$_SESSION['lang'] = $company['lang_default'];
	}
	$lang=$_SESSION['lang'];

    include_once _lib."AntiSQLInjection.php";
	require_once _source."lang$lang.php";	
	include_once _lib."config.php";
    if (file_exists(_lib."nina_firewall.php")){
        include_once _lib."nina_firewall.php";
    }
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_for.php";	
	include_once _lib."class.database.php";
	include_once _lib."functions_user.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";	

?>
<!doctype html>
<html lang="vi">
<head itemscope itemtype="http://schema.org/WebSite">
	<base href="http://<?=$config_url?>/" />
    <link rel="canonical" href="<?=getCurrentPageURL_CANO()?>" />  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
    
	<?php include _template."layout/seoweb.php";?>
	<?php include _template."layout/base_css.php";?> 
    <?=$company['codetren']?>       
</head>
<?php include _template."layout/background.php";?>
<body <?=$str_background?>>
<div id="pre-loader"><div class="loader"></div></div>
<h1 class="vcard fn" style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h1>
<h2 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h2>
<h3 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h3>

<div id="wapper">
	<div id="header" class="clearfix">
		<?php include _template."layout/header.php";?>
    </div>
    
    <div class="wap_menu">
        <div class="menu">
              <?php include _template."layout/menu_top.php";?>
        </div>
    </div>
    
    <div id="slider">
        <?php include _template."layout/slider_jssor.php";?>
    </div>
    
    <?php if($source=='index') { ?>
        <div class="box_trangchu">
            <?php include _template."layout/trangchu.php";?>
        </div>
    <?php }else{ ?>
        <div id="main_content" class="clearfix">
            <div id="right">
            	<?php include _template.$template."_tpl.php"; ?> 
            </div>
        </div>
    <?php } ?>
    
    <div id="wap_footer">
        <div id="footer" class="clearfix">
            <?php include _template."layout/footer.php";?>
            <div class="clear"></div>
        </div>
        <div class="bottom">
            <div class="center">
                <div class="copy">2018 Copyright © <?=$company['ten']?>. All rights reserved. Design by NINA Co.,Ltd</div>
                <div class="tk">
                    Online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span>|
                    <?=_thongketuan?>: <span><?=$trongtuan;?></span>|
                    <?=_thongkethang?>: <span><?=$trongthang;?></span>|
                    <?=_tongtruycap?>: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span>
                </div>
            </div>
        </div>
    </div>
    <?=$company['codethem']?>       
</div>

<?php //include _template."layout/phone2.php";?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async=true;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Meta facebook-->        


<?php include _template."layout/base_js.php";?> 
</body>
</html>