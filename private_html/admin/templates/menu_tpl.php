<div class="logo"><a href="index.php"><img src="images/logo.png" /></a></div>
<div class="sidebarSep mt0"></div>

<!-- Left navigation -->
<ul id="menu" class="nav">
<li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>

<li class="categories_li <?php if($_GET['com']=='product' || $_GET['com']=='order' || $_GET['com']=='excel') echo ' activemenu' ?>" id="menu_"><a href="" title="" class="exp"><span>Các loại gạo</span><strong></strong></a>
    <ul class="sub">
    	<?php phanquyen_menu('Quản lý danh mục 1','product','man_danhmuc','sanpham'); ?>
        <?php //phanquyen_menu('Quản lý danh mục 2','product','man_list','sanpham'); ?>
        <?php phanquyen_menu('Quản lý sản phẩm','product','man','sanpham'); ?>
        <?php phanquyen_menu('Quản lý đơn hàng','order','man',''); ?>
    </ul>
</li>
  
<li class="categories_li <?php if($_GET['com']=='news' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Quản lý khuyến mãi ','news','man','khuyenmai'); ?>        
        <?php phanquyen_menu('Quản lý tin tức','news','man','tintuc'); ?>        
        <?php phanquyen_menu('Quản lý chính sách','news','man','chinhsach'); ?>     
    </ul>
</li>
  
<li class="categories_li <?php if($_GET['com']=='about' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Cập nhật giới thiệu','about','capnhat','about'); ?>
        <?php phanquyen_menu('Cập nhật liên hệ','about','capnhat','lienhe'); ?>
        <?php phanquyen_menu('Cập nhật footer','about','capnhat','footer'); ?>
    </ul>
</li>
   
<li class="categories_li gallery_li <?php if($_GET['com']=='anhnen' || $_GET['com']=='background' || $_GET['com']=='slider' || $_GET['com']=='letruot') echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>Banner - Quảng cáo</span><strong></strong></a>
     <ul class="sub">
		<?php phanquyen_menu('Cập nhật background','anhnen','capnhat','background'); ?>
        <?php phanquyen_menu('Cập nhật share facebook index','background','capnhat','share'); ?>
        <?php //phanquyen_menu('Cập nhật hình bản đồ','background','capnhat','map'); ?>
        <?php phanquyen_menu('Cập nhật logo','background','capnhat','logo'); ?>
        <?php phanquyen_menu('Cập nhật banner','background','capnhat','banner'); ?>
        <?php phanquyen_menu('Cập nhật logo CT','background','capnhat','logo_ct'); ?>
        <?php phanquyen_menu('Quản lý slider','slider','man_photo','slider'); ?>
        <?php phanquyen_menu('Quản lý quảng cáo','slider','man_photo','quangcao'); ?>
     </ul>
</li>
  
<li class="categories_li setting_li <?php if($_GET['com']=='company' || $_GET['com']=='meta' || $_GET['com']=='about' || $_GET['com']=='user') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp"><span>Nội dung khác</span><strong></strong></a>
    <ul class="sub">
    	<?php phanquyen_menu('Cấu hình thông tin Website','company','capnhat',''); ?>
         <li<?php if($_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>
    </ul>
</li>
</ul>
