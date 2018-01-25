/**
 * CopyRight: FNF-NETWORK
 * Author: mizurugyru@gmail.com
 */
// JavaScript Document
// browser check
var Browser = {chk : navigator.userAgent.toLowerCase()}
Browser = {ie : Browser.chk.indexOf('msie') != -1, ie6 : Browser.chk.indexOf('msie 6') != -1, ie7 : Browser.chk.indexOf('msie 7') != -1, ie8 : Browser.chk.indexOf('msie 8') != -1, ie9 : Browser.chk.indexOf('msie 9') != -1, ie10 : Browser.chk.indexOf('msie 10') != -1, ie11 : Browser.chk.indexOf('msie 11') != -1, opera : !!window.opera, safari : Browser.chk.indexOf('safari') != -1, safari3 : Browser.chk.indexOf('applewebkir/5') != -1, mac : Browser.chk.indexOf('mac') != -1, chrome : Browser.chk.indexOf('chrome') != -1, firefox : Browser.chk.indexOf('firefox') != -1}
var responCheck = Browser.ie7 || Browser.ie8;
var mobile = (/iphone|ipod|ipad|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
if (mobile) { 
  var scrollWid = 0;
} else { 
  var scrollWid = 17;
}

	$(document).ready(function($) {
			$(".m_menu_list").hide();
		$(".main_menu a").mouseover(function() {
			$(".downmenu").show();
		});
		
		$(".downmenu").mouseleave(function(){
			$(".downmenu").hide();
		});
		
		  $(window).on("load resize scroll", function (){
 
		if($(this).scrollTop() > 100 ){
			$('.btn-up').stop().animate({ 'bottom': '10px', 'opacity': .7 }, 300, "swing");
		}else{
			$('.btn-up').stop().animate({ 'bottom': '-80px', 'opacity': 0 }, 300, "swing");
		}		
	  });	 
	  
	  	 //위로
	 $( '.btn-up' ).click( function() {
		  $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
		  return false;
		} );
	  
});	



function layer_open(el){

	var temp = $('#' + el);
	var bg = temp.prev().hasClass('bg');	//dimmed 레이어를 감지하기 위한 boolean 변수

	if(bg){
		$('.layer').fadeIn();	//'bg' 클래스가 존재하면 레이어가 나타나고 배경은 dimmed 된다. 
	}else{
		temp.fadeIn();
	}

	// 화면의 중앙에 레이어를 띄운다.
	if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
	else temp.css('top', '0px');
	if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
	else temp.css('left', '0px');

	temp.find('a.cbtn').click(function(e){
		if(bg){
			$('.layer').fadeOut(); //'bg' 클래스가 존재하면 레이어를 사라지게 한다. 
		}else{
			temp.fadeOut();
		}
		e.preventDefault();
	});

	$('.layer .bg').click(function(e){	//배경을 클릭하면 레이어를 사라지게 하는 이벤트 핸들러
		$('.layer').fadeOut();
		e.preventDefault();
	});

}		


	$(document).ready(function($) {
		$(".m_menu_list").hide();
		// when .menuBtn is clicked, do this
		$("#m_btn").click(function() {
			// open the menu with slide effect
			$(".m_menu_list").slideToggle(300);

		});
	});
//부라우저 별  사이즈가 css 사이즈와 맞지 않다.
function browserWidth(){
	if (typeof (window.innerWidth) == 'number') { //Chrome 
		myWidth = window.innerWidth; 
		myHeight = window.innerHeight;		
	} else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) { 
		myWidth = document.documentElement.clientWidth; 
		myHeight = document.documentElement.clientHeight; 
	} else if (document.body && (document.body.clientWidth || document.body.clientHeight)) { //IE9 
		myWidth = document.body.clientWidth; 
		myHeight = document.body.clientHeight; 
	}	
	return {width:myWidth, height:myHeight};
}
