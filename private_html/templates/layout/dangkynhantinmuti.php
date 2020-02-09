
<?php
	if(isset($_POST['email_nhantin']))
	{	
		if($_SESSION['email_dk'] < 3){
			$ten_nhantin = $_POST['ten_nhantin'];		
			$dienthoai_nhantin = $_POST['dienthoai_nhantin'];		
			$email_nhantin = $_POST['email_nhantin'];		
			$gioitinh_nhantin = $_POST['gioitinh_nhantin'];		
			$noidung_nhantin = $_POST['noidung_nhantin'];		
			$d->reset();
			$sql_kt_mail="SELECT ten,dienthoai,email,gioitinh,noidung FROM table_newsletter WHERE email='".$email_nhantin."'";
			$d->query($sql_kt_mail);
			$kt_mail=$d->result_array();
			if(count($kt_mail)>0){
				alert(_emaildadangky);
			}
			else
			{
				$ten_nhantin = trim(strip_tags($ten_nhantin));
				$dienthoai_nhantin = trim(strip_tags($dienthoai_nhantin));
				$email_nhantin = trim(strip_tags($email_nhantin));
				$gioitinh_nhantin = trim(strip_tags($gioitinh_nhantin));
				$noidung_nhantin = mysql_real_escape_string($noidung_nhantin);	

				$sql = "INSERT INTO  table_newsletter (ten,dienthoai,email,gioitinh,noidung) VALUES ('$ten_nhantin','$dienthoai_nhantin','$email_nhantin','$gioitinh_nhantin','$noidung_nhantin')";	
				if($d->query($sql)== true){
					$_SESSION['email_dk']=$_SESSION['email_dk']+1;
					alert(_guiemailthanhcong);
				}else{
					alert(_guiemailthatbai);
				}
			}
		}else{
            alert('Đã hết số lần đăng ký nhận tin! Vui lòng quay lại sau!'); return false;
        }
	}else{
    	if(!isset($_SESSION['email_dk']))
	    {
	        $_SESSION['email_dk'] = 0;
	    }
    }
?>


<div class="box_dangky">
	<div class="center">
		<div class="tit_dangky">
			<p>Đăng ký tư vấn</p>
			<span>Nhập vào email của bạn để nhận được thông tin khuyến mãi mới nhất từ chúng tôi</span>
		</div>
		<div class="cont_dangky">
			<div id="dknt">
			    <form name="frm_dknt" id="frm_dknt" method="post" action="" >
			        <input type="text" required="required" name="ten_nhantin" id="ten_nhantin" class="input_1" placeholder="Tên của bạn" />
			        <input type="text" required="required" name="dienthoai_nhantin" id="dienthoai_nhantin" class="input_2" placeholder="Số điện thoại" />
			        <input type="email" required="required" name="email_nhantin" id="email_nhantin" class="input_1" placeholder="Email của bạn" />
			        <input type="text" required="required" name="gioitinh_nhantin" id="gioitinh_nhantin" class="input_2" placeholder="Giới tính" />
			        <input type="text" required="required" name="noidung_nhantin" id="noidung_nhantin" class="input_3" placeholder="Nội dung" />
			        <input type="button" name="submit_nhantin" id="submit_nhantin" class="input_2" onclick="nhantin()" value="Đăng ký" />
			    </form>
			</div>
		</div>
	</div>
</div>

<style>
	.box_dangky{
		background: url(images/bg_3.jpg) no-repeat center top;
		background-size: cover;
		padding: 20px 0px;
	}
	.box_dangky .center{
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.tit_dangky{
		flex-basis: 30%;
	}
	.cont_dangky{
		flex-basis: 66%;
	}
	div#dknt
	{
	}
	form#frm_dknt{
		display: flex;
		justify-content: space-between;
		align-items: center;
		flex-wrap: wrap;
	}
	form#frm_dknt input[type='text'],form#frm_dknt input[type='email']
	{
		padding: 15px 5px;
		background:#fff;
		border-radius: 30px;
		outline:none;
		color:#000;
		border:none;
		margin-bottom: 14px;
		font-size: 13px;
	}
	form#frm_dknt input[type='button']
	{
		background:#0e9314;
		cursor:pointer;
		padding:14px 5px;
		border-radius: 30px;
		outline:none;
		color:#fff;
		border:none;
		margin-bottom: 14px;
		text-transform: uppercase;
		font-size: 15px;
	}
	form#frm_dknt input.input_1{
		flex-basis: 38%;
	}
	form#frm_dknt input.input_2{
		flex-basis: 22%;
	}
	form#frm_dknt input.input_3{
		flex-basis: 54%;
	}
</style>



















