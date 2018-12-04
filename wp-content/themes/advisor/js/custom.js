
/*
* Advisor Custom Js file
*/


  /*Header 7 dropdown menu issue on mobile*/

  jQuery(document).ready(function($) {


    jQuery(".navbar-nav i.fa").click(function(e){
      jQuery(this).parent("li").find(".dropdown-menu:first").slideToggle();
      e.stopPropagation();

    });

  });

  jQuery(document).ready(function($) {


    jQuery(".nav-pills i.fa").click(function(e){
      jQuery(this).parent("li").find(".dropdown-menu:first").slideToggle();
      e.stopPropagation();

    });

  });
  jQuery(document).ready(function($) {


    jQuery(".ad-nav i.fa").click(function(e){
      jQuery(this).parent("li").find(".ad-dropdownmenu:first").slideToggle();
      e.stopPropagation();

    });

  });


jQuery(function($) {
  "use strict";

    var autoplay;
    var autoplayTimeout;
    var loop ;

    // For Testinomials
    autoplay = jQuery('.testimonial-slider').attr('data-autoplay');
    autoplayTimeout = jQuery('.testimonial-slider').attr('data-autoplay-timeout');

    if (autoplay == 'true') {

      if (autoplayTimeout == 0) {
        autoplayTimeout = 5000;
        }

     } else {

       autoplayTimeout = 0;

     }

      jQuery(".testimonial-slider").owlCarousel({
          autoplay:autoplay,
          autoplayTimeout:autoplayTimeout,
          items: 1,
          loop: true,
        	slideSpeed : 300,
      		paginationSpeed : 400,
      		singleItem:true,
      		pagination:true,
      		paginationNumbers:false,

       });


  jQuery(".advisor-search-button").click(function(){
      jQuery("#advisor-search-form").submit();
    });


  function advisor_validateEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  }

  jQuery(document).on('click', '#submit', function(e){
    var comment_data = jQuery('.advisor-post-comment').val();

    var comment_admin_login = jQuery('.logged-in-as a').text();

    if ( comment_admin_login != '' ) {

      if ( comment_data ) {
        return true;
      } else {
        e.preventDefault();

        jQuery('#comment-msg').show();

        setTimeout(function() {
          jQuery("#comment-msg").hide('blind', {}, 500)
      }, 2500);

      }

    } else {
      var comment_author = jQuery('.advisor-comment-author').val();
      var comment_email = jQuery('.comment-email').val();
      var comment_url = jQuery('.comment-url').val();

      if ( comment_data != '' && comment_author != '' && comment_email != '' ) {

        if ( advisor_validateEmail(comment_email) ) {
          return true;
        } else {

          jQuery('#comment-msg').show();

          setTimeout(function() {
            jQuery("#comment-msg").hide('blind', {}, 500)
        }, 2500);

          return false;

        }

      } else  {
        e.preventDefault();

        jQuery('#comment-msg').show();

        setTimeout(function() {
          jQuery("#comment-msg").hide('blind', {}, 500)
      }, 2500);

      }

    }



  });

  jQuery(document).on('click' , '.team-member-details', function(e){
		"use strict";
    e.preventDefault();

    var team_member_id = $(this).data('post-id');
		// alert("#team-" +team_member_id);

      jQuery("#team-" + team_member_id).addClass('open');
      jQuery("#team-" + team_member_id).show();

  });


  // For Latest News without image
    autoplay = jQuery('#latest_news-slider').attr('data-autoplay');
    autoplayTimeout = jQuery('#latest_news-slider').attr('data-autoplay-timeout');

    if (autoplay == 'true') {

      if (autoplayTimeout == 0) {
        autoplayTimeout = 5000;
        }

     } else {

       autoplayTimeout = 0;

     }

    jQuery("#latest_news-slider").owlCarousel({
        autoplay:autoplay,
        autoplayTimeout:autoplayTimeout,
        loop:true,
    		slideSpeed : 300,
    		paginationSpeed : 400,
    		pagination:true,
    		paginationNumbers:false,
        responsive:{
            0:{
              items:1
            },
            768:{
              items:1
            },
            800:{
              items:3
            },
            1199:{
              items:3
            }

          }

     });


     // Recent Projects
     autoplay = jQuery('.recent_project-slider').attr('data-autoplay');
     autoplayTimeout = jQuery('.recent_project-slider').attr('data-autoplay-timeout');

     if (autoplay == 'true') {

       if (autoplayTimeout == 0) {
         autoplayTimeout = 5000;
         }

      } else {

        autoplayTimeout = 0;

      }

    jQuery(".recent_project-slider").owlCarousel({

          autoplay:autoplay,
          autoplayTimeout:autoplayTimeout,
    		  navigation : true,
    		  pagination : false,
          responsive:{
            0:{
              items:1
            },
            768:{
              items:1
            },
            979:{
              items:2
            },
            1199:{
              items:3
            }

          }

     });


     // For Latest News with image
     autoplay = jQuery('#latest_news-slider_1').attr('data-autoplay');
     autoplayTimeout = jQuery('#latest_news-slider_1').attr('data-autoplay-timeout');

     if (autoplay == 'true') {

       if (autoplayTimeout == 0) {
         autoplayTimeout = 5000;
         }

      } else {

        autoplayTimeout = 0;

      }


     jQuery("#latest_news-slider_1").owlCarousel({
       autoplay:autoplay,
       autoplayTimeout:autoplayTimeout,
       loop:true,
  		 slideSpeed : 300,
  		 paginationSpeed : 400,
  		 paginationNumbers:false,
  		 dots:true,
       responsive:{
          0:{
            items:1
          },
          768:{
            items:1
          },
          979:{
            items:2
          },
          1199:{
            items:3
          }

        }

 });


  // For Team
  autoplay = jQuery('.team_slider_2 ').attr('data-autoplay');
  autoplayTimeout = jQuery('.team_slider_2 ').attr('data-autoplay-timeout');

  if (autoplay == 'true') {

    if (autoplayTimeout == 0) {
      autoplayTimeout = 5000;
      }

   } else {

     autoplayTimeout = 0;

   }

  jQuery(".team_slider_2 ").owlCarousel({
    autoplay:autoplay,
    autoplayTimeout:autoplayTimeout,
    loop:true,
    items : 1,
  	pagination : false,
    navigation : true,
    pagination : false,
    navigationText: [
    "<i class='fa fa-angle-left' aria-hidden='true'></i>",
    "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
  });


  // For Team
  autoplay = jQuery('.our_team_slider ').attr('data-autoplay');
  autoplayTimeout = jQuery('.our_team_slider ').attr('data-autoplay-timeout');

  if (autoplay == 'true') {

    if (autoplayTimeout == 0) {
      autoplayTimeout = 5000;
      }

   } else {

     autoplayTimeout = 0;

   }


  // ============= For Search Icon Effect =============
    jQuery('a[href="#search"]').on('click', function(event) {
      event.preventDefault();
      $('#search').addClass('open');
      $('#search > form > input[type="search"]').focus();
    });
    jQuery('#search, #search button.close').on('click keyup', function(event) {
     if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
       $(this).removeClass('open');
     }
   });

   jQuery(document).ready(function(){
   	jQuery('.office_menu').find('ul').hide();
   	jQuery('.office_menu').on('click', '.selected', function(){
   		// jQuery(this).parent('.office_menu').find('ul').slideToggle();
   		var checkClass = jQuery(this).hasClass('active');
   		if(!checkClass){
   			jQuery(this).addClass('active');
   			jQuery(this).parent('.office_menu').find('ul').slideDown();
   		}else{
   			jQuery(this).removeClass('active');
   			jQuery(this).parent('.office_menu').find('ul').slideUp();
   		}
   	});
   	jQuery('.office_menu').on('click', 'ul a', function(e){
   		e.preventDefault();
   		jQuery('.addressbox').fadeOut();
   		var clickDataVal = jQuery(this).data('office');

   		var txt = jQuery(this).html();
   		jQuery(this).parents('.office_menu').find('.selected').html(txt);
   		jQuery(this).parents('.office_menu').find('.selected').removeClass('active');
   		jQuery(this).parents('ul').slideUp();

   		jQuery('.addressbox').each( function(){
   			var elemDataVal = jQuery(this).data('office');
   			if(clickDataVal == elemDataVal){
   				jQuery(this).delay(300).fadeIn();
   			}
   		});
   	});

   });

  // ============= For Team Icon Effect =============
   	 jQuery('a[href=".team"]').on('click', function(event) {
  		 event.preventDefault();
  		 $('#team').addClass('open');
  		 $('#team > form > input[type="search"]').focus();
  	 });

     jQuery('.advisor-team-member-popup button.copious-close').on('click', function(event) {
  		  $('.advisor-team-member-popup').fadeOut('slow');
  	 });
  // ============= Accordions ======================
   jQuery(".items > li > a").on('click', function(e) {
  	  e.preventDefault();
  	  var $this = $(this);
  	  if ($this.hasClass("expanded")) {
  		 $this.removeClass("expanded");
  	  }
  	  else {
  	  $(".items a.expanded").removeClass("expanded");
  	  $this.addClass("expanded");
  	  $(".sub-items").filter(":visible").slideUp("normal");
  	}
  	  $this.parent().children("ul").stop(true, true).slideToggle("normal");
  });

  autoplay = jQuery('.testimonial-slider_2').attr('data-autoplay');
  autoplayTimeout = jQuery('.testimonial-slider_2').attr('data-autoplay-timeout');

  if (autoplay == 'true') {

    if (autoplayTimeout == 0) {
      autoplayTimeout = 5000;
      }

   } else {

     autoplayTimeout = 0;

   }

  jQuery('.testimonial-slider_2').owlCarousel({
    autoplay:autoplay,
    autoplayTimeout:autoplayTimeout,
    center: true,
    loop: true,
    margin: 0,
    dots: true,
    dotData: true,
    responsive:{
      0:{
        items:1
      },
      768:{
        items:1
      },
      979:{
        items:2
      },
      1199:{
        items:3
      }

    }
  });


    // For Testinomials
    autoplay = jQuery('.team-slider').attr('data-autoplay');
    autoplayTimeout = jQuery('.team-slider ').attr('data-autoplay-timeout');

    if (autoplay == 'true') {

      if (autoplayTimeout == 0) {
        autoplayTimeout = 5000;
        }

     } else {

       autoplayTimeout = 0;

     }


  jQuery(".team-slider").owlCarousel({
      autoplay:autoplay,
      autoplayTimeout:autoplayTimeout,
      loop:true,
      slideSpeed : 300,
      items:1,
  		paginationSpeed : 400,
  		singleItem:true,
  		pagination:true,
  		paginationNumbers:false,

   });

  });

  /* CUSTOM TERACODE */
  function loadOurTeamSliderCarrousel() {
    jQuery(".our_team_slider").owlCarousel({
      autoplay: false,
      autoplayTimeout: 0,
      paginationSpeed : 400,
      pagination : false,
      stagePadding: 50,
      loop: true,
      startPosition: 3,
      dots: false,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
      }
    });
   }
   
    jQuery(document).ready(function(){
			
        var header = jQuery("header");
        jQuery(window).scroll(function() {    
            var scroll = jQuery(window).scrollTop();          
            if (scroll >= 120) {
              header.addClass("header_scrolled");
            } else {
              header.removeClass("header_scrolled");
            }
        });

        jQuery('.selectpicker').selectpicker({
          liveSearch: false, 
          showTick: false, 
          width: 'auto'
        });

        jQuery('#team_location').change(function(){
          var data = jQuery(this).val();
          
          jQuery.ajax({
            type: "GET",
            url: '/?rest_route=/custom/v1/getteam/'+data,
            data: null,
            async: false,
            success: function(result){                    
              jQuery('.our_team_slider').html(result['html']);
              setTimeout(function(){
                jQuery('.our_team_slider').data('owl.carousel').destroy(); 
                loadOurTeamSliderCarrousel();
              }, 200);
            }
          });
          
        });
       
       jQuery(function() {

          var $win = jQuery(window),
            pencilY = 0,
            previousScrollTop = 0,
            sliderEnd = false;

          var animationHandler = function() {
            scrollHandler();
          };

          jQuery(document).scroll(animationHandler);
          $win.resize(animationHandler);

          function scrollHandler() {
            var reference = jQuery('div.title_container').offset().top + 200;
            var id;
            var newId;
            var fixedTop = 90;
            var top = 110;
            var step = 10;
            var bottom = 440;
            //var bottom = jQuery( window ).height() - (jQuery( window ).height() / 2) ;

            if(jQuery( window ).width() <= 980) {
              fixedTop = 0;
              top = -85;
              step = 15;
              //bottom = 240;
            }

            if(!sliderEnd) {
              if((jQuery('section.work.container').offset().top - $win.scrollTop()) <= fixedTop) {
                jQuery('div.title_container').css('top', fixedTop+'px');
                jQuery('div.title_container').css('position', 'fixed');
                jQuery('section.work.container').css('padding-top', jQuery('div.title_container').outerHeight());
              } else {
                jQuery('div.title_container').css('position', 'relative');
                jQuery('div.title_container').css('top', 'unset');
                jQuery('section.work.container').css('padding-top', '0');
              }
            } else {
              jQuery('div.title_container').css('position', 'relative');
              jQuery('div.title_container').css('top', 'unset');
              jQuery('section.work.container').css('padding-top', '0');
            }
            
            jQuery('div[id^="step_"]').each(function() {

              id = jQuery(this).attr('id'); 
              id = id.split('_'); 
              newId = parseInt(id[1]);
              
                var current = jQuery(this).offset().top;

                if((current - reference) < (top)) {
                  jQuery('#step_'+newId).css('opacity', 0);
                }
                if( (top) < (current - reference) && (current - reference) < (top + step)) {
                  jQuery('#step_'+newId).css('opacity', 0.2);
                }
                if( (top + step) < (current - reference) && (current - reference) < (top + (2*step) )) {
                  jQuery('#step_'+newId).css('opacity', 0.4);
                }
                if( (top + (2*step)) < (current - reference) && (current - reference) < (top + (3*step))) {
                  jQuery('#step_'+newId).css('opacity', 0.6);
                }
                if( (top + (3*step)) < (current - reference) && (current - reference) < (top + (4*step))) {
                  jQuery('#step_'+newId).css('opacity', 0.8);
                }
                if( (top + (4*step)) < (current - reference) && (current - reference) < (top + (5*step))) {
                  jQuery('#step_'+newId).css('opacity', 1);
                }

                if ( (bottom - (4*step)) > (current - reference) && (current - reference) > (bottom - (5*step)) ) {
                  jQuery('#step_'+newId).css('opacity', 1);
                }
                if ( (bottom - (3*step)) > (current - reference) && (current - reference) > (bottom - (4*step)) ) {
                  jQuery('#step_'+newId).css('opacity', 0.8);
                }
                if ( (bottom - (2*step)) > (current - reference) && (current - reference) > (bottom - (3*step)) ) {
                  jQuery('#step_'+newId).css('opacity', 0.6);
                }
                if ( (bottom - step) > (current - reference) && (current - reference) > (bottom - (2*step)) ) {
                  jQuery('#step_'+newId).css('opacity', 0.4);
                }
                if ( (bottom) > (current - reference) && (current - reference) > (bottom - step) ) {
                  jQuery('#step_'+newId).css('opacity', 0.2);
                }
                if ( (current - reference) > (bottom) ) {
                  jQuery('#step_'+newId).css('opacity', 0);
                }

                /*
                  Scroll inferior. Cabecera sale de tope.
                */
               if(newId == 5) {
                if (jQuery('#step_'+newId).offset().top - $win.scrollTop() < (fixedTop - 50) ) {
                  jQuery('div.title_container').removeClass('fade-in');
                  sliderEnd = true;
                } else {
                  jQuery('div.title_container').addClass('fade-in');
                  sliderEnd = false;
                }
              }
            });
            previousScrollTop = $win.scrollTop();
          }

        });
          
        loadOurTeamSliderCarrousel();
        setTimeout(function () {      
          jQuery('#headerVideo')[0].play();
        }, 1000);
      });
