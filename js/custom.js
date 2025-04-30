/* 
 * custom js Document
*/ 


$(window).load(function(){
	
});

$(document).ready(function() {
	responsive();	
	mainSlider();
	subSlider();
	basicTab();
	// buySlider();
	filterBtn();
});

//responsive style
function responsive(){
	var res = ""
	var param = $("#header");
	var gnb = $("#header .gnb").html();
	var gnbArea = $(".gnb > li");
	var gnbLink = gnbArea.children("a");
	$('#header nav .gnb > li ul').addClass('active');
	$('#header').append('<a href="#" class="btn_close">硫붾돱�リ린</a>');
	$('#header .btn_menu').append('<span></span><span></span><span></span>');	

	//lng + sub title
	var pageTitle = $('#header .gnb > li a.on').html();
	var subTitle = $('#header .gnb > li > ul > li > a.on').html();
	var lnbHtml = $('#header .gnb > li > a.on').next('ul').html();

	$('.sub-title').html(subTitle);
	$('.page-title').html(pageTitle);

	//sub check
	if($(".sub-container").length){
		$("body").attr("data-site", "sub"); 
	}

	//user
	// $('.header-user__menu').append('<ul class="header-user__gnb"></ul>');
	// $('.header-user__gnb').append(gnb);

	//default 
	if(!$(".btn_menu").is(":hidden")) res = "mob";
	else res = "web";  
	param.attr("class",res);
	def(param);

	$(window).resize(function(){
		if(!$(".btn_menu").is(":hidden")) res2 = "mob";
		else res2 = "web"; 
		param.attr("class",res2);
		if(res != res2){
			res = res2;  
			def(param);
		}
	}); 

	//mobile
	$('.btn_menu').on('click',function(){
		if($(this).hasClass('active')){
			$('.btn_menu').removeClass('active');
			$('body').removeClass('active');
			param.find('nav').removeClass('active');
			gnbLink.removeClass('active');	
			// gnbLink.parent().find('ul').slideUp();			
			
			posY = $('body').attr('data-scroll');
			$(window).scrollTop(posY);
		}else{
			posY = window.scrollY || document.documentElement.scrollTop;
			$(this).toggleClass('active');		
			setTimeout(function() {
				 $('body').toggleClass('active');
			}, 0);			
			param.find('nav').toggleClass('active');
			gnbLink.removeClass('active');	
			// gnbLink.parent().find('ul').slideUp();	
			$('body').attr('data-scroll',posY);
		}
		return false;
	});	

	$('.btn_close').on('click',function(){
		$('.btn_menu').removeClass('active');
		$('body').removeClass('active');
		param.find('nav').removeClass('active');
		gnbLink.removeClass('active');	
		gnbLink.parent().find('ul').slideUp();
		return false;
	});	

	$(function(){
		$('.page-nav__item .page-nav__item-title a').click(function(){
			$(this).parent().next('.page-nav__item-cont').slideToggle(400);
			$(this).parent('div').parent('.page-nav__item').siblings(".page-nav__item").children(".page-nav__item-cont").slideUp(400);
		});
	  });


	function def(param){
		if(param.attr("class") == "web" ){			
			$('#header .gnb > li > a').unbind('click');
			$('#header .gnb > li > ul').removeAttr('style');
			$('.btn_menu, body, #header nav').removeClass('active');
			$('#header nav .btn_home').remove();
			gnbLink.removeClass('active');
			
			gnbLink.hover(function() {
				if(param.attr("class") == "web" || param.attr("class") && "web"){
					$(this).addClass("active").parent().addClass("active"); 
					$(this).parent().hover(function() {
					}, function(){     
					   $(this).removeClass("active", function(){
							$(this).parent().find("a").removeClass("active");
					   });    
					}); 
					if(!($(this).parent().find("ul").length > 0)) {
					   $(this).parent().removeClass("active").find("a").removeClass("active");
					}
				}
			});

			// $('.page-nav__item').each(function(){
			// 	var pageNavLink = $(this).find('.page-nav__item-title').children('a');
			// 	if($(this).children('.page-nav__item-cont').length > 0){
			// 		pageNavLink.on('click',function(e){
			// 			e.preventDefault();
			// 			$('.page-nav__item-cont').stop().slideUp();
			// 			$(this).parent().parent().children('.page-nav__item-cont').stop().slideDown();
			// 			return false;
			// 		});
			// 	}
			// });

			//sub
			$('.find-cont .sub-title-wrap .find-nav, .buy-view-wrap .buy-view__nav, .page-nav__title .page-nav__close').remove();
			
		} else if (param.attr("class") == "mob"){ 
			// $('#header .gnb li').off('mouseenter mouseleave');
			$('#header nav').prepend('<a href="/" class="btn_home" data-util="home"></a>');

			$('#header.mob .gnb > li').each(function(){
				var gnbLink = $(this).children('a');
				if($(this).children('ul').length > 0){
					$(this).addClass('down');
					// gnbLink.on('click',function(e){
					// 	e.preventDefault();
					// 	$('#header .gnb a').removeClass('active');
					// 	gnbArea.children('ul').stop().slideUp();
					// 	$(this).addClass('active');
					// 	$(this).siblings('a').addClass('active');
					// 	$(this).parent().children('ul').stop().slideDown();
					// 	return false;
					// });
				}
			});

			//sub
			var buyNav = $('.buy-view__nav').html();
			var findNav = $('.find-nav').html();
			$('.buy-view-wrap').prepend('<div class="buy-view__nav"></div>');
			$('.buy-view-wrap .buy-view__nav').append(buyNav);
			$('.find-cont .sub-title-wrap').append('<div class="find-nav"></div>');
			$('.find-cont .sub-title-wrap .find-nav').append(findNav);
			$('.buy-page__nav .page-nav__title').append('<a href="#" class="page-nav__close"><span></span><span></span>�リ린</a>')
			$('.page-nav__close').on('click',function(){
				$('.buy-page__nav').removeClass('active');	
			});
		}
	}
}

// scroll
$(function(){
    var scroll = 0;
	$(window).scroll(function(event){
		var moved = $(this).scrollTop();
		if (moved > scroll){
			$('body').addClass('fixed')
		}                 
		if (moved === 0) {
		$('body').removeClass('fixed')
		}
		if (moved > scroll){
		//on  UP scroll event 
		}
		scroll = moved;
	});
});

//scroll custom
$(window).scroll( function(){
	//scroll  potion add class
	if ($(window).scrollTop() >= 10) {
		$('#header').addClass('on');
	}
	else {
		$('#header').removeClass('on');
	}

	//scroll  top animaion
	$('[data-ani], [data-common-ani]').each( function(i){
		
		var bottom_of_object = $(this).offset().top + $(this).outerHeight()/3;
		var bottom_of_window = $(window).scrollTop() + $(window).height();
		
		if( bottom_of_window > bottom_of_object ){                
			$(this).addClass("is_moved");	                    
		}
		else{
			//$(this).removeClass('is_moved');
		}		
	});     

	//scroll top btn position footer
	if ($(window).scrollTop() < $(document).height() - $(window).height() - $('#footer').outerHeight() + 110) {
		$('.btn_top').removeClass('active');
	} else {		
		$('.btn_top').addClass('active');
	}
	
	if ($(window).scrollTop() >= 500) {
		$('.btn_top').addClass('fiexd');
	}
	else {
		$('.btn_top').removeClass('fiexd');
	}

	if ($(window).scrollTop() < $(document).height() - $(window).height() - $('#footer').outerHeight()) {
		$('#footer').removeClass('hd');
	} else {
		$('#footer').addClass('hd');
	}
});	

//start animation + css
$(function(){
	setTimeout(function(){
		$('body').addClass('motion-on');			
	}, 0);
});

//mainSlider
function mainSlider(){
	$('.main-visual__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		speed: 1500,
		fade: true,
		arrows:false,
		pauseOnFocus: false,
	});
}

function subSlider(){
	$('.product-slider').slick({
		slidesToShow:3,
		slidesToScroll: 1,
		dots:true,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 700,
		arrows:true,
		draggable : false, 
		pauseOnFocus: false,
		responsive: [
			{  
				breakpoint: 1023,
				settings: {
					slidesToShow:2,
					draggable : true, 
					arrows:false,
				} 
			},
			{ 
				breakpoint: 860,
				settings: {	
					slidesToShow:1,
					draggable : true, 
					arrows:false,
				} 
			},
			{ 
				breakpoint: 540,
				settings: {	
					slidesToShow:1,
					draggable : true, 
					arrows:false,
				} 
			}

		]
	});
}

//tab
function basicTab(){
	$(".tab-list li").click(function(){		
		change_org($(this));
	});

	function change_org(el) {
		var parThis = el.closest("#content").find(".tab-container");
		var activeTab = el.attr("rel");

		el.parent(".tab-list").children("li").removeClass("on");
		el.addClass("on");
		
		parThis.children(".tab-container__item").removeClass("on").hide();
		parThis.children("#" + activeTab).addClass("on").fadeIn();
	}
}

$(function(){
	$('.buySlider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		asNavFor: '.buySlider-nav'
	  });

	  $('.buySlider-nav').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		asNavFor: '.buySlider-for',
		dots: false,
		arrows: false,
		centerMode: true,
		focusOnSelect: true,
		draggable:false,
	  });
});

function filterBtn(){
	$('.mob-fixBtn > a').on('click', function(){
		$('.buy-page__nav').addClass('active');
	});
}