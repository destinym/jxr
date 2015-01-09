
	$(document).ready(function() {
		
		$('#by_menu').bymenu({
			alpha:0.5,
			menubgcolor:"#cc9966,#ffcc66,#669999,#99cc99,#00caff,#6666cc"
			});
		$("#scroll_news").byslider({
			wraper_id:'wraper',
			tabsCon_id:'tabsCon',
			tabsList_id:'tabsList',
			selectClass:'select', 
			imagestype:'index',
			Event:'mouseover',
			autoPlay : true,
			autoTime : 3000,
			speed:1000,
			Default:1,
			fadeOut: 200,
			Scroll:true,
			Direction:"x"
		});
		$('#mycarousel').jcarousel();
		$("#product_img").byslider({
			wraper_id:'wraper_product',
			tabsCon_id:'tabsCon_product',
			tabsList_id:'tabsList_product',
			selectClass:'select', 
			Event:'mouseover',
			autoPlay : true,
			autoTime : 4000,
			speed:1000,
			Default:1,
			fadeOut: 200,
			Scroll:true,
			Direction:"y"
			});
	
		//$('#menu').naviDropDown({
		
	//});
		//$("#menu_1").mouseover(
		//	function() {
			//	$(".menu_content").slideDown(1000);
		//	});
		//	$("#menu_1").mouseout(function() {
				//$(".menu_content").slideUp(1000);
		//	});
		
	
	$(".index_right").indexcontent({
			hosturl:"http://www.blackant.com.cn/",
			listchangecolor:"yes",
			lineClass: "index_content_line",
			listcontentClass: "index_content",
			listcontentbackimg:"images/images_bg_1.jpg",
			mouseovercolor: "#00ccff",
			mouseoutcolor:"#fff",
			imgmore:true,
			imgmoreClass:"index_act_list_more",
			imgmorepix:"-16px"
		
		});

        
    });
	
