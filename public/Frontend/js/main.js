


//sticky navbar pc
$(document).ready(function(){
    $(window).scroll(function(){
        if( $(window).scrollTop() > 30 ){
            $(".navbar-pc ").css({
                "position" : "fixed",
                "lef" : "0",
                "top" : "0",
                "width" : "100%",
                "padding" : "15px 0",
                "z-index" : "5",
            })
        }
        else{
            $(".navbar-pc ").css({
                "position" : "unset",
                "lef" : "0",
                "top" : "0",
                "width" : "100%",
                "padding" : "unset",
                "z-index" : "5",
            })
        }
    })
})


//go to top
$(document).ready(function(){
    $(window).scroll(function(){
        if( $(window).scrollTop() > 10 ){
            $(".go-to-top a").fadeIn();
        }
        else{
            $(".go-to-top a").fadeOut();
        }
    })
})
//counter up js
$('.counter').counterUp({
    delay: 10,
    time: 1000
})
//home banner js 
$(document).ready(function(){
    $('#home-banner-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots: false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});

//client carousel
$('.client-carousel').owlCarousel({
    loop:true,
	nav:false,
	dots: true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

//child nav show
$(document).ready(function(){
    $(".show-child").click(function(){
        $(".child-item").slideDown();
        $(".hide-child").show();
        $(".show-child").hide();
    });
    $(".hide-child").click(function(){
        $(".child-item").slideUp();
        $(".hide-child").hide();
        $(".show-child").show();
    });
})

//show navbar mobile
$(document).ready(function(){
    $(".show-nav").click(function(){
        $('html,body').css({
            "overflow" : "hidden"
        })
        $(".navbar-box").css({
            "transform" : "translateX(0%)",
            "transition" : "0.4s ease-in-out"
        })
        $(".body-content").css({
            "transform" : "translateX(70%)",
            "transition" : "0.4s ease-in-out",
            "background" : "rgba(1,1,1,0.5)"
        })
        $(document).click(function(divclose){
            if( $(divclose.target).closest(".navbar-box-child").length == 0 && $(divclose.target).closest(".show-nav").length == 0 ){
                $('html,body').css({
                    "overflow" : "auto"
                })
                $(".navbar-box").css({
                    "transform" : "translateX(-100%)",
                    "transition" : "0.4s ease-in-out"
                })
                $(".body-content").css({
                    "transform" : "translateX(0%)",
                    "transition" : "0.4s ease-in-out",
                    "background" : "unset"
                })
            }
        })
    })
    
    $(".hide-nav").click(function(){
        $('html,body').css({
            "overflow" : "auto"
        })
        $(".navbar-box").css({
            "transform" : "translateX(-100%)",
            "transition" : "0.4s ease-in-out"
        })
        $(".body-content").css({
            "transform" : "translateX(0%)",
            "transition" : "0.4s ease-in-out",
            "background" : "unset"
        })
    })
})






//testimonial carousel 
$('.testimonial-carousel').owlCarousel({
    loop:true,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#createAd").submit(function(e) {
	e.preventDefault();
    

    var formData = new FormData(this);
 
	
	$.ajax({
      type:'POST',
      url:'api/contact-us',
      data:formData,
      cache:false,
      contentType: false,
      processData: false, 
	  success:function(data) {
        swal("","Message successfully send","success");
        $("#createAd input").val('');
        $("#createAd textarea").val('');
	  }
    });
    
  });






