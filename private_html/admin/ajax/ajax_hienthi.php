<?php 
	session_start();
	
	include_once "ajax_lib.php";

	if((int)$_POST["id"]){
		echo $sql = "update ".(string)$_POST["bang"]." SET ".(string)$_POST["type"]."=".(string)$_POST["value"]." WHERE  id = ".$_POST["id"]."";
		
		$data = mysql_query($sql) or die("Not query sql");
	}
?>