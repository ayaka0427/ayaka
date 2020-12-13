// TOPに戻るボタン
$(function() {
    var pagetop = $('#page_top'); 

    pagetop.hide();
    
    $(window).scroll(function () {
        
        if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500); //0.5秒かけてトップへ移動
        return false;
    });
    
    // more
    
    // var window_h = $(window).height();
    
    // $(window).on("scroll", function() {
        
    //     var scroll_top = $(window).scrollTop();
        
    //     $(".more1").each(function() {
    //         var elem_pos = $(this).offset().top;
            
    //         if (scroll_top >= elem_pos - window_h +1000) {
    //             $(this).addClass("fadein");
    //         }
    //     });
    // });
    
    var moreUpY = $('.more1');
    moreUpY.hide();
    
    $(window).scroll(function () {
        if($(this).scrollTop() > 850) {
            moreUpY.fadeIn(2000);
        }
    });
    
    var moreUpH = $('.more2');
    moreUpH.hide();
    
    $(window).scroll(function () {
        if($(this).scrollTop() > 1100) {
            moreUpH.fadeIn(2000);
        }
    });
    
    var moreUpT = $('.more3');
    moreUpT.hide();
    
    $(window).scroll(function () {
        if($(this).scrollTop() > 1500) {
            moreUpT.fadeIn(2000);
        }
    });
    
    var moreUpB = $('.more4');
    moreUpB.hide();
    
    $(window).scroll(function () {
        if($(this).scrollTop() > 1900) {
            moreUpB.fadeIn(2000);
        }
    });
    
    var moreUpS = $('.more5');
    moreUpS.hide();
    
    $(window).scroll(function () {
        if($(this).scrollTop() > 2300) {
            moreUpS.fadeIn(2000);
        }
    });
    
    
    $(".open").click(function () {
        $("#menu_sp").slideDown(500);
        $(".close").show();
        $(".open").hide();
        
    });
    
     $(".close").click(function () {
        $("#menu_sp").slideUp(500);
        $(".close").hide();
        $(".open").show();
    });   
    
    $('.q').click( function(){

        // 	var target = $(this).data( 'target' );
        // 	$('#' + target ).slideToggle();
    	$('.q').removeClass('active');
    	$('.q').next().slideUp();
    	
    	
    	$(this).next().slideToggle();
    	
    	$(this).toggleClass('active'); 
    });
    
    
    // $('.q').hover(
    //     function(){
    //         $(this).next().slideDown();
    //         $(this).addClass('active'); 
    //     },
    //     function(){
    //         $(this).next().slideUp();
    //         $(this).removeClass('active'); 
    //     },
    // );
    
    
//  ------------------- 八千代座のmore -----------------     
//      $('.yachiyoza_img').on('mouseover', function () {
//     $(this).children('.more').stop().fadeIn(500);
//   });
//   $('.yachiyoza_img').on('mouseout', function () {
//     $(this).children('.more').stop().fadeOut();
//   });

 
// 	$('.yachiyoza_img').hover(function () {
// 	   // $('.more').slideUp(500);
// 	    $('.more').fadeIn(500);
//     });

 $('.yachiyoza_img').on('mouseover', function () {
    $('.more1').fadeIn(500);
  });
  
   $('.yachiyoza_img').on('mouseout', function () {
    $('.more1').fadeOut(500);
  });
  
  $('.hyakahyakusai_img').on('mouseover', function () {
    $('.more2').fadeIn(500);
  });
  
   $('.hyakahyakusai_img').on('mouseout', function () {
    $('.more2').fadeOut(500);
  });
  
  $('.toro_img').on('mouseover', function () {
    $('.more3').fadeIn(500);
  });
  
   $('.toro_img').on('mouseout', function () {
    $('.more3').fadeOut(500);
  });
  
  $('.buzen_img').on('mouseover', function () {
    $('.more4').fadeIn(500);
  });
  
   $('.buzen_img').on('mouseout', function () {
    $('.more4').fadeOut(500);
  });
  
  $('.sakura_img').on('mouseover', function () {
    $('.more5').fadeIn(500);
  });
  
   $('.sakura_img').on('mouseout', function () {
    $('.more5').fadeOut(500);
  });
  
 
        
});
        