<?php
	session_start();
	@define ( '_lib' , '../../libraries/');

	include_once "ajax_lib.php";

	$table = (string)$_POST['table'];
	$id = (int)$_POST['id'];
	$value = (string)$_POST['value'];

	$data['stt'] = $value;
	$d->setTable($table);
	$d->setWhere('id', $id);
	$d->update($data);


?>
	
	