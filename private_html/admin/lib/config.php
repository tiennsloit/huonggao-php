<?php if(!defined('_lib')) die("Error");


	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	
	$config['database']['servername'] = 'mysqlsvr.mysql.database.azure.com:3306';
	$config_url=$_SERVER["SERVER_NAME"];
	$config['database']['database'] = 'huonggaoco_db';	
	$config['database']['username'] = 'tiennsloit@mysqlsvr';
	$config['database']['password'] = 'Udtc@1985';
	
	$config['salt']='{UDzZ(,#rW';
	
	$config['database']['refix'] = 'table_';
	$meta_robots = 'noodp,INDEX, FOLLOW';
	
	$ip_host = '127.0.0.1';
	$mail_host = 'info@huonggao.com';
	$pass_mail = 'yzF4SM8Y01';

	$sitekey = '6Lcqr4IUAAAAAHw9fjH-SZ94N16ZdPcF4hQoGyAs';
	$secretkey = '6Lcqr4IUAAAAALdmwMPRyUvNInilh4ah25miw6On';

	$config['lang']=array(''=>'Tiếng Việt');#Danh sách ngôn ngữ hỗ trợ
	
	$config['author']['name'] = 'Nguyễn Trần Thiên An';
	$config['author']['email'] = 'thienannt@gmail.com';
	$config['author']['timefinish'] = '12/2018';

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$fw_conf['firewall']='0'; //Bat tat firewall
	$fw_conf['max_lockcount']=10;//So lan toi da phat hien dau hieu DDOS va khoa IP do vinh vien 
	$fw_conf['max_connect']=15;//So ket noi toi da dc gioi han boi $fw_conf['time_limit']
	$fw_conf['time_limit']=3;//Thoi gian dc thuc hien toi da $fw_conf['max_connect'] ket noi
	$fw_conf['time_wait']=5;//Thoi gian cho de dc mo khoa khi IP bi khoa tam thoi
	$fw_conf['email_admin']='nina@nina.vn';//Email lien lac voi Admin
	$fw_conf['htaccess']=".htaccess";//Duong dan toi file htaccess tren server
	$fw_conf['ip_allow']='127.0.0.1';
	$fw_conf['ip_deny']='';

?>
