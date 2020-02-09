<?php
	$d->reset();
	$sql = "select count(id) as dem from #_lienhe where type='lienhe' and hienthi=0";
	$d->query($sql);
	$dem_thu = $d->result_array();
?>
<div class="wrapper">
		<div class="menu_mobi"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>Xin chào, <?=$_SESSION['login_admin']['username']?>!</span></div>
        <div class="userNav">
            <ul>
                <li><a href="http://<?=$config_url?>" title="" target="_blank"><img src="./images/icons/topnav/mainWebsite.png" alt="" /><span>Vào trang web</span></a></li>
                
                <li><a title="Có <?=$dem_thu[0]['dem']?> chưa đọc" href="index.php?com=lienhe&act=man&type=lienhe" title=""><img src="images/icons/topnav/messages.png" alt="" /><span>Thư liên hệ</span><span class="numberTop"><?=$dem_thu[0]['dem']?></span></a></li>
                
                <li><a href="index.php?com=user&act=logout" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>Đăng xuất</span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
<?php echo $_SESSION['login']['role']; ?>

