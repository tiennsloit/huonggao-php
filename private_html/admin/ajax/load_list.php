<?php
	session_start();
	include_once "ajax_lib.php";
	
	$id_danhmuc=(int)$_POST['id_danhmuc'];
	$id_list=(int)$_POST['id_list'];

	if(!is_array($id_danhmuc)){
		$id_danhmuc = json_decode($id_danhmuc);
	}

	if(!is_array($id_list)){
		$id_list = json_decode($id_list);
	}

	$where .= " hienthi=1 ";
	if(count($id_danhmuc)>0){
		if(in_array('all',$id_danhmuc)){
			
		} else {
			$where .= "  and ( id_danhmuc=".$id_danhmuc[0];
			for($i=1;$i<count($id_danhmuc);$i++){
				$where .= " or id_danhmuc=".$id_danhmuc[$i];
			}
			$where .= " ) ";
		}
	}

	$d->reset();
    $sql = "select id,ten from #_product_list where $where order by id desc";
    $d->query($sql);
    $row_list = $d->result_array();

?>

<?php for($i=0;$i<count($row_list);$i++){ ?>   
<option value="<?=$row_list[$i]['id']?>" <?php  if($id_list!=''){if(in_array($row_list[$i]['id'],$row_list)){?> selected="selected"<?php } } ?>> - <?=$row_list[$i]['ten']?></option>
<?php } ?>   