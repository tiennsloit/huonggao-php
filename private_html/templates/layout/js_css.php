<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
<link href="css/default.css" type="text/css" rel="stylesheet" />
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="css/popup.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
<link href="fontawesome/css/font-awesome.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js" ></script>
<script type="text/javascript" src="js/my_script.js"></script>
<script src="js/plugins-scroll.js" type="text/javascript" ></script>

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
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			pauseOnHover:true,	
      });
    });
</script>

<script type="text/javascript" src="js/ImageScroller.js"></script>

<!--lazyload-->
<script type="text/javascript" src="js/jquery.lazyload.pack.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $(".item img").lazyload({
        //placeholder : "images/load.gif",
        effect : "fadeIn",
      }); 
  });
</script>
<!--lazyload-->

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

<!--Code gữ thanh menu trên cùng
<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			var cach_top = $(window).scrollTop();
			var heaigt_header = $('#header').height();

			if(cach_top >= heaigt_header){
				$('.wap_menu').css({position: 'fixed', top: '0px', zIndex:99});
			}else{
				$('.wap_menu').css({position: 'relative'});
			}
		});
	});
 </script>
<!--Code gữ thanh menu trên cùng-->

<!--animate hiệu ứng
<link href="css/animate.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript">
 	new WOW().init();
</script>
<!--animate hiệu ứng-->

<!--Tooltip hình ảnh
<script type="text/javascript" src="js/ImageTooltip.js"></script>
<!--Tooltip hình ảnh-->

<!--Tooltip có nội dung
<script src="Toolstip/ajax.js" type="text/javascript"></script>
<script src="Toolstip/ajax-dynamic-content.js" type="text/javascript"></script>
<script src="Toolstip/home.js" type="text/javascript"></script>
<link href="Toolstip/tootstip.css" rel="stylesheet" type="text/css" />
Tooltip có nội dung-->

<!--lockfixed
<script type="text/javascript" src="js/jquery.lockfixed.min.js"></script>
<script type="text/javascript">
	$(window).load(function(e) {
		(function($) {
				var left_h=$('#left').height();
				var right_h=$('#right').height();
                var footer_h=$('#wap_footer').height();
				if(right_h>left_h) 
				{
					$.lockfixed("#left",{offset: {top: 10, bottom: footer_h}});
				}
		})(jQuery);
	});
</script>
<!--lockfixed-->

<!--Cấm click chuột phải
<script type="text/javascript">
	//ondragstart="return false;" ondrop="return false;"; sự kiện thẻ body
	var message="Đây là bản quyền thuộc về <?=$company['ten']?>";
	function clickIE() {
	if (document.all) {(message);return false;}
	}
	function clickNS(e) {
	if (document.layers||(document.getElementById&&!document.all)) {
		if (e.which==2||e.which==3) {alert(message);return false;}}}
		if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")
</script>
<script type="text/javascript">
	function disableselect(e){
		return false 
	}
	function reEnable(){ 
		return true 
	} 
	//if IE4+
	document.onselectstart=new Function ("return false")
	//if NS6
	if (window.sidebar){
		document.onmousedown=disableselect 
		document.onclick=reEnable
	} 
</script>
<!--Cấm click chuột phải-->

<!--Chạy đến vị trí mới
<script type="text/javascript" src ="js/jquery.scrollTo.js"></script>
<script  type="text/javascript">
	$(window).load(function() {
		//$('html, body').animate({scrollTop:500},500);
		$('body').scrollTo('#wapper',1000);
	}); 
</script>
Chạy đến vị trí mới-->

