<?php
	session_start();
	include_once "ajax_lib.php";
	
	$email=(string)$_POST['email'];
	$gioitinh=(string)$_POST['gioitinh'];
	
	
	$d->reset();
	$sql = "select id from #_newsletter where email='".$_POST['email']."'";
	$d->query($sql);
	$maill = $d->result_array();
	
	if(count($maill)!=0){
		echo 1;
	} else {

		if(isset($_POST['email'])){
			$data['email'] = $_POST['email'];
			$data['gioitinh'] = $_POST['gioitinh'];
			$data['ngaytao'] = time();
			$d->setTable('newsletter');
			if($d->insert($data))
				echo 0;
			else
				echo 2;
		}
		
	}
		

?>

