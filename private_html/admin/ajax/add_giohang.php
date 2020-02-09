<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);

	include_once "ajax_lib.php";
		
	@$pid = (int)$_POST['pid'];
	if($_POST['soluong']>0){
		@$soluong = (int)$_POST['soluong'];
	}else {
		@$soluong = 1;
	}
    
    
    $result_giohang = addtocart($pid,$soluong);

    $count = count($_SESSION['cart']);
	
	$result = array('result_giohang' => $result_giohang,'count' => $count);

	echo json_encode($result);
?>