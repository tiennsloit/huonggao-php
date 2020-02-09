<?php if(!defined('_lib')) die("Error");
	
	function for1($table,$com,$type,$duoi='.html'){
		global $d,$lang,$str;
	
		$d->reset();
		$sql = "select id,ten$lang as ten,tenkhongdau from #_$table where hienthi=1 and type='$type' order by stt,id desc";
		$d->query($sql);
		$baiviet = $d->result_array();
		
		$str='';
		$str.='<ul>';
		for($i=0;$i<count($baiviet);$i++){
			$str.='<li><a href="'.$com.'/'.$baiviet[$i]["tenkhongdau"].'-'.$baiviet[$i]["id"].$duoi.'">'.$baiviet[$i]["ten"].'</a>';
		}
		$str.='</ul>';		
		return $str;
	}
	function for2cap($table1,$table2,$com,$type,$duoi1='',$duoi2='/'){
		global $d,$lang,$str;
	
		$d->reset();
		$sql = "select id,ten$lang as ten,tenkhongdau from #_$table1 where hienthi=1 and type='$type' order by stt,id desc";
		$d->query($sql);
		$danhmuc_cap1 = $d->result_array();
		
		$str='';
		$str.='<ul>';
		for($i=0;$i<count($danhmuc_cap1);$i++){
				$str.='<li><a href="'.$com.'/'.$danhmuc_cap1[$i]["tenkhongdau"].'-'.$danhmuc_cap1[$i]["id"].$duoi1.'">'.$danhmuc_cap1[$i]["ten"].'</a>';
				
				$d->reset();
				$sql="select id,ten$lang as ten,tenkhongdau from #_$table2 where hienthi=1 and type='$type' and id_danhmuc='".$danhmuc_cap1[$i]["id"]."' order by stt,id asc";
				$d->query($sql);
				$danhmuc_cap2=$d->result_array();
				if(count($danhmuc_cap2)>0){
					$str.='<ul>';
						for($j=0;$j<count($danhmuc_cap2);$j++){
							$str.='<li><a href="'.$com.'/'.$danhmuc_cap2[$j]["tenkhongdau"].'-'.$danhmuc_cap2[$j]["id"].$duoi2.'">'.$danhmuc_cap2[$j]["ten"].'</a></li>';				
						}
					$str.='</ul>';
				}
				$str.='</li>';
		}
		$str.='</ul>';		
		return $str;
	}
	
	function for3cap($table1,$table2,$table3,$com,$type,$duoi1='',$duoi2='/',$duoi3=''){
		global $d,$lang,$str;
	
		$d->reset();
		$sql = "select id,ten$lang as ten,tenkhongdau from #_$table1 where hienthi=1 and type='$type' order by stt,id desc";
		$d->query($sql);
		$danhmuc_cap1 = $d->result_array();
		
		$str='';
		$str.='<ul>';
		for($i=0;$i<count($danhmuc_cap1);$i++){
				$str.='<li><a href="'.$com.'/'.$danhmuc_cap1[$i]["tenkhongdau"].'-'.$danhmuc_cap1[$i]["id"].$duoi1.'">'.$danhmuc_cap1[$i]["ten"].'</a>';
				
				$d->reset();
				$sql="select id,ten$lang as ten,tenkhongdau from #_$table2 where hienthi=1 and type='$type' and id_danhmuc='".$danhmuc_cap1[$i]["id"]."' order by stt,id asc";
				$d->query($sql);
				$danhmuc_cap2=$d->result_array();
				if(count($danhmuc_cap2)>0){
					$str.='<ul>';
						for($j=0;$j<count($danhmuc_cap2);$j++){
							$str.='<li><a href="'.$com.'/'.$danhmuc_cap2[$j]["tenkhongdau"].'-'.$danhmuc_cap2[$j]["id"].$duoi2.'">'.$danhmuc_cap2[$j]["ten"].'</a>';
								$d->reset();
								$sql="select id,ten$lang as ten,tenkhongdau from #_$table3 where hienthi=1 and type='$type' and id_list='".$danhmuc_cap2[$j]["id"]."' order by stt,id asc";
								$d->query($sql);
								$danhmuc_cap3=$d->result_array();
								if(count($danhmuc_cap3)>0){
									$str.='<ul>';
										for($k=0;$k<count($danhmuc_cap3);$k++){
											$str.='<li><a href="'.$com.'/'.$danhmuc_cap3[$k]["tenkhongdau"].'/'.$danhmuc_cap3[$k]["id"].$duoi3.'">'.$danhmuc_cap3[$k]["ten"].'</a>';
										}
									$str.='</ul>';
								}
							$str.='</li>';				
						}
					$str.='</ul>';
				}
				$str.='</li>';
		}
		$str.='</ul>';		
		return $str;
	}
	
	function tinh_phantram($gia,$giakm){
		global $d,$str;
		
		$str = 0;
		if($gia>0 and $giakm>0)
		{
			$str = round(100-($giakm/$gia*100));
		}	
		return $str;
	}
	
	function tinh_giamgia($gia,$giakm){
		global $d,$str;
		$str = 0;
		$str = $gia - $giakm;
		return $str;
	}

?>