<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js" ></script>
<script type="text/javascript" src="js/my_script.js"></script>
<script src="js/plugins-scroll.js" type="text/javascript" ></script>

<!-- slider jssor -->
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/js_jssor_slider.js"></script>

<!--Hover menu-->
<script language="javascript" type="text/javascript">
	$(document).ready(function() { 
		//Hover vào menu xổ xuống
		$(".menu ul li").hover(function(){
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300); 
			},function(){ 
			$(this).find('ul:first').css({visibility: "hidden"});
			}); 
		$(".menu ul li").hover(function(){
				$(this).find('>a').addClass('active2'); 
			},function(){ 
				$(this).find('>a').removeClass('active2'); 
		}); 
		//Hover vào danh mục xổ xuống
		/*$("#danhmuc ul li").hover(function(){
			$(this).find('ul:first').show(300); 
		},function(){ 
			$(this).find('ul:first').hide(300);
		}); */
		//Click vào danh mục xổ xuống
		$('#danhmuc ul li a').click(function(event) {
           /* Act on the event */
           if($(this).closest("li").children("ul").length) {
               // the clicked on <li> has a <ul> as a direct child
               $(this).removeAttr('href');
               if($(this).hasClass('actived2')) {
                   $(this).removeClass('actived2');
                   $(this).closest("li").children("ul").slideUp();
               }
               else {
                   $(this).addClass('actived2');
                   $(this).closest("li").children("ul").slideDown();
               }
           }
       	});
       	$("nav#danhmuc ul > li > ul > section > a").click(function(event) {
           /* Act on the event */
           location.href=$(this).data('url');
           return true;
       	});
	});  
</script>
<!--Hover menu-->

<!--Menu mobile-->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
	$(function() {
		$m = $('nav#menu').html();
		$('nav#menu_mobi').append($m);
		$('nav#menu_mobi .search').addClass('search_mobi').removeClass('search');
		$('.hien_menu').click(function(){
			$('nav#menu_mobi').css({height: "auto"});
		});
				
		$('.user .fa-user-plus').toggle(function(){
			$('.user ul').slideDown(300);
		},function(){
			$('.user ul').slideUp(300);
		});
		
		$('nav#menu_mobi').mmenu({
				extensions	: [ 'effect-slide-menu', 'pageshadow' ],
				searchfield	: true,
				counters	: true,
				navbar 		: {
					title		: 'Menu'
				},
				navbars		: [
					{
						position	: 'top',
						content		: [ 'searchfield' ]
					}, {
						position	: 'top',
						content		: [
							'prev',
							'title',
							'close'
						]
					}, {
						position	: 'bottom',
						content		: [
							'<a>Online : <?php $count=count_online();echo $tong_xem=$count['dangxem'];?></a>',
							'<a><?=_tong?> : <?php $count=count_online();echo $tong_xem=$count['daxem'];?></a>'
						]
					}
				]
			});
	});
</script>
<!--Menu mobile-->

<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#slider_slick').slick({
		  	//vertical:true,Chay dọc
			//fade: true,//Hiệu ứng fade của slider
			//slidesPerRow: 2,
			//cssEase: 'linear',//Chạy đều
		  	//lazyLoad: 'progressive',
			//mobileFirst:true,
			//variableWidth: true//Không fix kích thước
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToShow: 1,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			pauseOnHover:true,	//Rê chuột vào đúng lại
      });
      $('.sp_slick').slick({
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToShow: 4,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			pauseOnHover:true,	//Rê chuột vào đúng lại
			responsive: [
			    {
			      breakpoint: 769,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1,
			        infinite: true
			      }
			    },
			    {
			      breakpoint: 604,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    }
		  	]
      });
      $('.tin_slick').slick({
		  	vertical:true,
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToShow: 3,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			pauseOnHover:true,	//Rê chuột vào đúng lại
      });
    });
</script>

<script src="plugin/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">
	$("[data-fancybox]").fancybox({
		selector : '[data-fancybox="images"]',
  		loop     : true
	});

	$('[data-fancybox]').fancybox({
	  youtube : {
	    controls : 0,
	    showinfo : 0
	  },
	  vimeo : {
	    color : 'f00'
	  }
	});
</script>

<!-- video -->
<script type="text/javascript">
	$(document).ready(function(e) {
		$(window).scroll(function(){
			if(!$('.load_video').hasClass('load_video2'))
			{
				$('.load_video').addClass('load_video2');
				$('.load_video').load( "ajax/video.php");
			}
		 });
    });
</script>

<!--Thêm alt cho hình ảnh và tìm kiếm-->
<script type="text/javascript">
	$(document).ready(function(e) {
        $('img').each(function(index, element) {
			if(!$(this).attr('alt') || $(this).attr('alt')=='')
			{
				$(this).attr('alt','<?=$company['ten']?>');
			}
        });
    });
</script>
<!--Thêm alt cho hình ảnh-->

<!--Tim kiem-->
<script language="javascript"> 
    function doEnter(evt){
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			onSearch(evt);
		}
	}
	function onSearch(evt) {	
			var keyword1 = $('.keyword:eq(0)').val();
			var keyword2 = $('.keyword:eq(1)').val();
			
			if(keyword1=='<?=_nhaptukhoatimkiem?>...')
			{
				keyword = keyword2;
			}
			else
			{
				keyword = keyword1;
			}
			if(keyword=='' || keyword=='<?=_nhaptukhoatimkiem?>...')
			{
				alert('<?=_chuanhaptukhoa?>');
			}
			else{
				location.href = "tim-kiem.html&keyword="+keyword;
				loadPage(document.location);			
			}
		}		
</script>   
<!--Tim kiem-->


<!-- like facebook -->
<script type="text/javascript">
   jQuery(document).ready(function() {
       jQuery(".fanpage_facebook").hover(function() {
            jQuery(this).stop().animate({right: "0"}, "medium");
        }, function() {
              jQuery(this).stop().animate({right: "-300"}, "medium");
        }
        , 500);
    });
</script>

<?php if($com=='lien-he') { ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<script type="text/javascript">
		$(document).ready(function(e) {
			$('.click_ajax').click(function(){
				if(isEmpty($('#ten_lienhe').val(), "<?=_nhaphoten?>"))
				{
					$('#ten_lienhe').focus();
					return false;
				}
				if(isEmpty($('#diachi_lienhe').val(), "<?=_nhapdiachi?>"))
				{
					$('#diachi_lienhe').focus();
					return false;
				}
				if(isEmpty($('#dienthoai_lienhe').val(), "<?=_nhapsodienthoai?>"))
				{
					$('#dienthoai_lienhe').focus();
					return false;
				}
				if(isPhone($('#dienthoai_lienhe').val(), "<?=_nhapsodienthoai?>"))
				{
					$('#dienthoai_lienhe').focus();
					return false;
				}
				if(isEmpty($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
				{
					$('#email_lienhe').focus();
					return false;
				}
				if(isEmail($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
				{
					$('#email_lienhe').focus();
					return false;
				}
				if(isEmpty($('#tieude_lienhe').val(), "<?=_nhapchude?>"))
				{
					$('#tieude_lienhe').focus();
					return false;
				}
				if(isEmpty($('#noidung_lienhe').val(), "<?=_nhapnoidung?>"))
				{
					$('#noidung_lienhe').focus();
					return false;
				}
				if(isEmpty($('#capcha').val(), "<?=_nhapmabaove?>"))
				{
					$('#capcha').focus();
					return false;
				}
				$.ajax({
					type:'post',
					url:$(".frm").attr('action'),
					data:$(".frm").serialize(),
					dataType:'json',
					beforeSend: function() {
						$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');     
					},
					error: function(){
						add_popup('<?=_hethongloi?>');
						$(".frm")[0].reset();
					},
					success:function(kq){
						add_popup(kq.thongbao);
						$('#capcha').val('');
						if(kq.nhaplai=='nhaplai')
						{
							$(".frm")[0].reset();
						}
						
						
					}
				});
			});    
	    });
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#reset_capcha").click(function() {
				$("#hinh_captcha").attr("src", "sources/captcha.php?"+Math.random());
				return false;
			});
		});
	</script>
<?php } ?>

<?php if($source=='product') { ?>
	<script type="text/javascript">
	    $(document).ready(function(){
			$('.slick2').slick({
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  arrows: false,
				  fade: true,
				  autoplay:false,  //Tự động chạy
				  autoplaySpeed:5000,  //Tốc độ chạy
				  asNavFor: '.slick'			 
			});
			$('.slick').slick({
				  slidesToShow: 4,
				  slidesToScroll: 1,
				  asNavFor: '.slick2',
				  dots: false,
				  centerMode: false,
				  focusOnSelect: true
			});
			 return false;
	    });
	</script>

	<link href="magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
	<script src="magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
	<script type="text/javascript">
		var mzOptions = {
			zoomMode:true,
			onExpandClose: function(){MagicZoom.refresh();}
		};
	</script>


	<!--Tab sản phẩm-->
	<link href="css/tab.css" type="text/css" rel="stylesheet" />
	<script language="javascript" type="text/javascript">
		$(document).ready(function(){
			$('#content_tabs .tab').hide();
			$('#content_tabs .tab:first').show();
			$('#ultabs li:first').addClass('active');
			
			$('#ultabs li').click(function(){
				var vitri = $(this).data('vitri');
				$('#ultabs li').removeClass('active');
				$(this).addClass('active');
				
				$('#content_tabs .tab').hide();
				$('#content_tabs .tab:eq('+vitri+')').show();
				return false;
			});	
		});
	</script>
	<!--Tab sản phẩm-->
<?php } ?>

<?php if($source=='index' || $template=='product') { ?>
	<!--Mua hàng-->
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('.size').click(function(){
				$('.size').removeClass('active_size');
				$(this).addClass('active_size');
			});
			$('.mausac').click(function(){
				$('.mausac').removeClass('active_mausac');
				$(this).addClass('active_mausac');
			});
			$('a.dathang').click(function(){
					if($('.size').length && $('.active_size').length==false)
					{
						alert('<?=_chonsize?>');
						return false;
					}
					if($('.active_size').length)
					{
						var size = $('.active_size').html();
					}
					else
					{
						var size = '';
					}
					
					if($('.mausac').length && $('.active_mausac').length==false)
					{
						alert('<?=_chonmau?>');
						return false;
					}
					if($('.active_mausac').length)
					{
						var mausac = $('.active_mausac').html();
					}
					else
					{
						var mausac = '';
					}
						var act = "dathang";
						var id = $(this).data('id');
						var soluong = 1;
						if(soluong>0)
						{
							$.ajax({
								type:'post',
								url:'ajax/cart.php',
								dataType:'json',
								data:{id:id,size:size,mausac:mausac,soluong:soluong,act:act},
								beforeSend: function() {
									$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');  
								},
								error: function(){
									add_popup('<?=_hethongloi?>');
								},
								success:function(kq){
									location.href = "gio-hang.html";								
								}
							});
						}
						else
						{
							alert('<?=_nhapsoluong?>');
						}
				return false;
			});
		});
	</script>
	<!--Mua hàng-->
<?php } ?>

<?php if($template=='product_detail') { ?>
	<!--Mua hàng-->
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('.size').click(function(){
				$('.size').removeClass('active_size');
				$(this).addClass('active_size');
			});
			$('.mausac').click(function(){
				$('.mausac').removeClass('active_mausac');
				$(this).addClass('active_mausac');
			});
			$('a.dathang').click(function(){
					if($('.size').length && $('.active_size').length==false)
					{
						alert('<?=_chonsize?>');
						return false;
					}
					if($('.active_size').length)
					{
						var size = $('.active_size').html();
					}
					else
					{
						var size = '';
					}
					
					if($('.mausac').length && $('.active_mausac').length==false)
					{
						alert('<?=_chonmau?>');
						return false;
					}
					if($('.active_mausac').length)
					{
						var mausac = $('.active_mausac').html();
					}
					else
					{
						var mausac = '';
					}
						var act = "dathang";
						var id = "<?=$row_detail['id']?>";
						var soluong = $('.soluong').val();
						if(soluong>0)
						{
							$.ajax({
								type:'post',
								url:'ajax/cart.php',
								dataType:'json',
								data:{id:id,size:size,mausac:mausac,soluong:soluong,act:act},
								beforeSend: function() {
									$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');  
								},
								error: function(){
									add_popup('<?=_hethongloi?>');
								},
								success:function(kq){
									add_popup(kq.thongbao);
									$('.menu2 li span').html(kq.sl);
									console.log(kq);
								}
							});
						}
						else
						{
							alert('<?=_nhapsoluong?>');
						}
				return false;
			});
		});
	</script>
	<!--Mua hàng-->
<?php } ?>

<?php if($com=='gio-hang') { ?>
	<script type="text/javascript">
		function del(pid,size,mausac){
			if(confirm('Do you really mean to delete this item')){
				document.form1.pid.value=pid;
				document.form1.size.value=size;
				document.form1.mausac.value=mausac;
				document.form1.command.value='delete';
				document.form1.submit();
			}
		}
		function clear_cart(){
			if(confirm('This will empty your shopping cart, continue?')){
				document.form1.command.value='clear';
				document.form1.submit();
			}
		}
		function update_cart(){
			document.form1.command.value='update';
			document.form1.submit();
		}
		function quaylai()
		{
			history.go(-1);
		}
		
		function doEnter_update(evt){
			var key;
			if(evt.keyCode == 13 || evt.which == 13){
				update_cart(evt);
			}
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#thanhpho').change(function(){
				var id_city = $(this).val();
				$.ajax({
					type:'post',
					url:'ajax/place.php',
					data:{act:'dist',id_city:id_city},
					success:function(rs){
						$('#quan').html(rs);
					}
				});
			});
			
			$('.click_ajax2').click(function(){
				if(isEmpty($('#httt').val(), "<?=_chonhinhthucthanhtoan?>"))
				{
					$('#httt').focus();
					return false;
				}
				if(isEmpty($('#hoten').val(), "<?=_nhaphoten?>"))
				{
					$('#hoten').focus();
					return false;
				}
				if(isEmpty($('#dienthoai').val(), "<?=_nhapsodienthoai?>"))
				{
					$('#dienthoai').focus();
					return false;
				}
				if(isPhone($('#dienthoai').val(), "<?=_nhapsodienthoai?>"))
				{
					$('#dienthoai').focus();
					return false;
				}
				if(isEmpty($('#thanhpho').val(), "<?=_chontinhthanhpho?>"))
				{
					$('#thanhpho').focus();
					return false;
				}
				if(isEmpty($('#quan').val(), "<?=_chonquanhuyen?>"))
				{
					$('#quan').focus();
					return false;
				}
				
				if(isEmpty($('#diachi').val(), "<?=_nhapdiachi?>"))
				{
					$('#diachi').focus();
					return false;
				}
				
				if(isEmpty($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
				{
					$('#email_lienhe').focus();
					return false;
				}
				if(isEmpty($('#noidung').val(), "<?=_nhapnoidung?>"))
				{
					$('#noidung').focus();
					return false;
				}
				frm_order.submit();
			});    
	    });
	</script>
<?php } ?>

