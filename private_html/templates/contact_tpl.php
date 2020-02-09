

<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="box_container">
   <div class="content">
   		<div class="tt_lh clearfix">
   			<div class="ct_left">
   				<?=$company_contact['noidung'];?> 
   			</div>
	        
	        <div class="ct_right">
				<div class="frm_lienhe">
		        	<form method="post" name="frm" class="frm" action="ajax/contact.php" enctype="multipart/form-data">
		            	<div class="loicapcha thongbao"></div>
		            	<div class="item_lienhe"><input name="ten_lienhe" type="text" id="ten_lienhe" placeholder="<?=_hovaten?>" /></div>
	                
		                <div class="item_lienhe"><input name="diachi_lienhe" type="text" id="diachi_lienhe" placeholder="<?=_diachi?>"/></div>
		                
		                <div class="item_lienhe"><input name="dienthoai_lienhe" type="text" id="dienthoai_lienhe" placeholder="<?=_dienthoai?>"/></div>
		                
		                <div class="item_lienhe"><input name="email_lienhe" type="text" id="email_lienhe" placeholder="Email"/></div>
		                
		                <div class="item_lienhe"><input name="tieude_lienhe" type="text" id="tieude_lienhe" placeholder="<?=_chude?>"/></div>
		                
		                <div class="item_lienhe"><textarea name="noidung_lienhe" id="noidung_lienhe" rows="5" placeholder="<?=_noidung?>"></textarea></div>

		                <div class="item_lienhe"><div class="recaptcha"><div class="g-recaptcha" data-sitekey="<?=$sitekey?>"></div></div></div>
		                <div class="clear"></div>
		                <div class="item_lienhe" >
		                	<input type="button" value="<?=_gui?>" class="click_ajax" />
		                    <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />
		                </div>
		            </form>
		        </div><!--.frm_lienhe-->   
	        </div>
        </div>     
      
        <div class="bando_map">        
           <?=$company['bando'];?> 
        </div><!--.bando-->            
   </div><!--.content--> 
</div><!--.box_container--> 