<?php  if(!defined('_source')) die("Error");
	$d->reset();
	$sql_share = "select photo$lang as photo from #_background where type='share' limit 0,1";
	$d->query($sql_share);
	$row_share = $d->fetch_array();

	$images_facebook = 'http://'.$config_url.'/'.'thumb/600x315/2/'._upload_hinhanh_l.$row_share['photo'];
	$title_facebook = $company['ten'];
	$description_facebook = $company['ten'];
	$url_facebook = getCurrentPageURL();

	
	$where = " type='sanpham' and hienthi=1 and spbanchay=1 order by stt,id desc";
	
	#Lấy sản phẩm và phân trang
	$d->reset();
	$sql = "SELECT count(id) AS numrows FROM #_product where $where";
	$d->query($sql);	
	$dem = $d->fetch_array();
	
	$totalRows = $dem['numrows'];
	$page = $_GET['p'];
	$pageSize = $company['soluong_sp'];//Số item cho 1 trang
	$offset = 5;//Số trang hiển thị				
	if ($page == "")$page = 1;
	else $page = $_GET['p'];
	$page--;
	$bg = $pageSize*$page;		
	
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giakm from #_product where $where limit $bg,$pageSize";		
	$d->query($sql);
	$product = $d->result_array();	
	$url_link = getCurrentPageURL();

?>