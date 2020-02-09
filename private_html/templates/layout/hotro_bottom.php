
<style>
	div.hotro_bot
	{
		position: fixed;
		right: 0px;
		bottom: -291px;
		width: 300px;
		z-index: 777777;
		background: #f3f3f3;
	}
	div.tieude_hotro
	{
		background: #df1c1c;
		color: #fff;
		width: 100%;
		padding: 6px 7px;
		font-size: 17px;
		cursor: pointer;
		font-family: robotobold;
		text-transform: uppercase;
		text-align: center;
	}
	div.tieude_hotro i{
		margin-right: 5px;
	}
	#hotro{
		max-height: 291px;
		overflow-y: auto;
	}
	div#hotro .phone
	{
		color: #f10b0b;
		font-size: 24px;
		padding: 10px;
		font-family: robotobold;
	}
	div#hotro ul
	{
		list-style: none;
	    border-bottom: 1px dashed #DDDDDD;
	    padding: 7px;
	    margin: 0px 10px;
	    font-size: 13px;
	}
	div#hotro ul li
	{
		clear: both;
	    padding: 6px 0;
	    color: #555555;
	}
	div#hotro ul li i
	{
		font-size:17px;
		margin-right:8px;
		clear:both;
	}
	div#hotro ul li span
	{
		color: #3853a4;
	    font-weight: normal;
	    font-size: 14px;
	    margin-top: 3px;
	    float: left;
	}
	div#hotro ul li a img
	{
		margin-right: 5px;
	    float: left;
		width:25px;
	}
</style>


<?php  
	$d->reset();
	$sql_hotro = "select ten$lang as ten,dienthoai,email,skype from #_yahoo where hienthi=1 and type='yahoo' order by stt,id desc";
	$d->query($sql_hotro);
	$hotro = $d->result_array();
?>
<div class="hotro_bot"><div class="tieude_hotro"><i class="fa fa-comments-o" aria-hidden="true"></i><?=_hotrotructuyen?></div>
	<div id="hotro">
		<div class="phone">Hotline: <?=$company['dienthoai']?></div>
	    <?php for($i = 0, $count_hotro = count($hotro); $i < $count_hotro; $i++){ ?>
	        <ul>
	            <li><a href="skype:<?=$hotro[$i]['skype']?>?chat"><img src="images/skype.png" alt="<?=$hotro[$i]['ten']?>" /></a>
	            <a><img src="images/zalo.png" alt="<?=$hotro[$i]['ten']?>" /></a><span><?=$hotro[$i]['ten']?></span></li>
	            <li><i class="fa fa-phone" aria-hidden="true"></i><?=$hotro[$i]['dienthoai']?></li>
	            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?=$hotro[$i]['email']?></li>
	        </ul>
	    <?php } ?>
	</div>
</div>

