$(window).on('load',function(){

    if($('.blog_inner_detail p, .blog_inner_detail li ,.blog-details table td, .blog-details .conclusion_section p').length > 0){
        $('.blog_inner_detail p, .blog_inner_detail li ,.blog-details table td, .blog-details .conclusion_section p').each(function() {
                var updatedText = $(this).html().replace(/&nbsp;/g, ' ');
                $(this).html(updatedText);
            });
        
          var hash = window.location.hash;
          if (hash) {
            var targetElement = $(hash);
            if (targetElement.length) {
              var targetPosition = targetElement.offset().top - 200;
              $("html, body").animate(
                {
                  scrollTop: targetPosition,
                },
                500
              );
            }
          }
      }


 $(".nb-key-features .tabs .icon").first().addClass("active");
    const $tabs = $(".nb-key-features .tabs .icon");
    const $contents = $(".nb-key-features .orange-bg > div");

    function initDesktop() {
        // Show the right column back
        $(".nb-key-features .col-sm-7").show();

        // Remove any previously cloned accordion contents
        $(".nb-key-features .tabs").find(".tab-content").remove();

        // Default first tab active
        $tabs.removeClass("active").first().addClass("active");
        $contents.hide().removeClass("active").first().addClass("active").show();

        // Desktop fade-in tabs
        $tabs.off("click").on("click", function (e) {
            e.preventDefault();
            let $this = $(this);
            let target = $this.attr("href");

            if ($this.hasClass("active")) return;

            $tabs.removeClass("active");
            $this.addClass("active");

            $contents.filter(".active").removeClass("active").fadeOut(250, function () {
                $(target).fadeIn(300).addClass("active");
            });
        });
    }

    function initMobile() {
        // Hide right-side column
        $(".nb-key-features .col-sm-7").hide();

        // Reset previous cloned contents
        $(".nb-key-features .tabs").find(".tab-content").remove();
        $tabs.removeClass("active");

        // Mobile accordion
        $tabs.off("click").on("click", function (e) {
            e.preventDefault();
            let $this = $(this);
            let target = $this.attr("href");

            // If clicked tab is already active → close it
            if ($this.hasClass("active")) {
                $this.removeClass("active");
                $this.closest(".tabs").find(".tab-content").slideUp(300, function () {
                    $(this).remove();
                });
                return;
            }

            // Close all open tabs
            $tabs.removeClass("active");
            $(".nb-key-features .tabs").find(".tab-content").slideUp(300, function () {
                $(this).remove();
            });

            // Activate clicked tab
            $this.addClass("active");

            // Clone content and place it immediately below clicked tab
            let $clonedContent = $(target).clone().addClass("tab-content").hide();
            $clonedContent.insertAfter($this).slideDown(300);
        });
    }

    function initTabs() {
        if ($(window).width() <= 992) {
            initMobile();
        } else {
            initDesktop();
        }
    }

    // Initialize on load
    initTabs();

    // Re-initialize on window resize
    $(window).on("resize", function () {
        initTabs();
    });




      
    setTimeout(function () {
      jQuery('.static-form form').removeAttr('data-hs-cf-bound');
    }, 500);

    jQuery(".static-form form input").each(function () {
        var attr_input_name = jQuery(this).attr("name");
        jQuery(this).closest(".form-columns-1").addClass(attr_input_name);
      });
      
      jQuery(".static-form form textarea ").each(function () {
        var attr_input_name = jQuery(this).attr("name");
        jQuery(this).closest(".form-columns-1").addClass(attr_input_name);
      });
      
      jQuery(".static-form form select").each(function () {
        var attr_input_name = jQuery(this).attr("name");
        jQuery(this).closest(".form-columns-1").addClass(attr_input_name);
      });


      jQuery(".show-more").click(function () {
          var container = jQuery(this).closest(".casestudy-block"); // Adjust to your actual parent class
          var content = container.find(".content-data");

          content.toggleClass("show-more-height");

          if (content.hasClass("show-more-height")) {
              // content.slideDown(300);
              jQuery(this).text("Show Less");
          } else {
              // content.slideUp(300);
              jQuery(this).text("Show More");
          }
      });
});

jQuery(document).ready(function(){
    jQuery('#how_did_you_hear_about_us_').on('change',function() {
        console.log('enter change event');
        var selectedValue = jQuery(this).val();
        console.log(selectedValue); 
        if(selectedValue == 'Podcast'){
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.what_podcast_').show();
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.what_conference_event_').hide();
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.webinar_topic_title').hide();
        }else if(selectedValue == 'Conference/Event'){
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.what_podcast_').hide();
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.what_conference_event_').show();
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.webinar_topic_title').hide();
        }else if(selectedValue == 'Webinar'){
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.what_podcast_').hide();
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.what_conference_event_').hide();
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.webinar_topic_title').show();
        }else{
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.what_podcast_').hide();
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.what_conference_event_').hide();
          jQuery(this).closest('.how_did_you_hear_about_us_').siblings('.webinar_topic_title').hide();
        }
    });


});

$(document).ready(function () {
  
    
      
    });
    
    // For mobile side menu
    if ($("#sidemenu_toggle").length) {
      $("#sidemenu_toggle").on("click", function () {
        $(".pushwrap").toggleClass("active");
        $(".side-menu").addClass("side-menu-active"),
          $("#close_side_menu").fadeIn(700);
        $("body").addClass("pushmenu-push-toLeft");
      }),
        $("#close_side_menu , #btn_sideNavClose ").on("click", function () {
          $(".side-menu").removeClass("side-menu-active"),
            $(".pushwrap").removeClass("active"),
            $("body").removeClass("pushmenu-push-toLeft"),
            $("#close_side_menu").fadeOut(200);
        });
    }
    if ($(".side-right-btn").length) {
      $(".side-right-btn").click(function () {
        $(".navbar.navbar-right").toggleClass("show");
      }),
        $(".navbar.navbar-right .navbar-nav .nav-link").click(function () {
          $(".navbar.navbar-right").toggleClass("show");
        });
    }

    if ($('#toc').length > 0) {
      $(document).ready(function() {
        var $sidebarList = $('#toc');
        var $currentUl = null;
    
        // Assign unique IDs to each h5 and h6 element
        $('.blog_inner_detail h2').each(function(index) {
          $(this).attr('id', 'title-' + (index + 1));
        });
        $('.blog_inner_detail h3').each(function(index) {
          $(this).attr('id', 'sub_title-' + (index + 1));
        });
    
        // Generate sidebar list
        $('.blog_inner_detail :is(h2)').each(function() {
          if ($(this).is('h2')) {
            $currentUl = $('<ul></ul>');
            $sidebarList.append(
              $('<li></li>').text($(this).text()).attr('id', 'nav-' + $(this).attr('id')).data('target', $(this).attr('id')).append($currentUl)
            );
          } else if ($(this).is('h3') && $currentUl) {
            $currentUl.append(
              $('<li></li>').text($(this).text()).attr('id', 'nav-' + $(this).attr('id')).data('target', $(this).attr('id'))
            );
          }
        });

        // ✅ Append static FAQ item only if body has class 'single-apps' and #faq exists on page
        if ($('body').hasClass('single-apps') && $('#faq').length > 0) {
          $sidebarList.append(
            $('<li></li>').text('FAQ').attr('id', 'nav-faq').data('target', 'faq')
          );
        }
    
        // Wrapping and removing empty <ul> elements
        $('#toc > li').wrapAll("<ul></ul>");
        $('#toc > ul > li').each(function() {
          if ($(this).find('ul').find('li').length == 0) {
            $(this).find('ul').remove();
          }
          if ($(this).find('ul').length) {
            $(this).closest('li').addClass('has-sub-child');
          }
        });
    
        // Adding arrow to items with sublists
        $('#toc li.has-sub-child').each(function() {
          $(this).append('<span class="list-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none"><path id="Vector 31" d="M1 1.5L5.5 5L1 8.5" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>');
        });
    
        var stickyHeaderHeight = $('header').outerHeight();
        var isScrolling = false;
    
        // Handle scroll event
        $(window).on('scroll', function() {
          if (isScrolling) return; // If scrolling animation is in progress, do nothing
    
          var scrollTop = $(window).scrollTop();
          $('.blog_inner_detail :is(h2)').each(function() {
            var $this = $(this);
            var offsetTop = $this.offset().top - stickyHeaderHeight;
            if (scrollTop >= offsetTop) {
              $('#toc li').removeClass('active');
              $('#toc #nav-' + $this.attr('id')).addClass('active');
            }
          });
    
          // Toggle sublist visibility
          $('#toc li.has-sub-child').each(function() {
            if ($(this).hasClass('active') || $(this).find('ul li').hasClass('active')) {
              $(this).addClass('sub-list-open');
              $(this).find('ul').slideDown();
            } else {
              $(this).removeClass('sub-list-open');
              $(this).find('ul').slideUp();
            }
          });
    
          // Update title text in sticky sidebar
          var activeText = $('.title-list li.active').contents().not($('.title-list li.active').children()).text().trim();
          if ($('.title-list li').hasClass('active')) {
            if ($('.toc-card-body').hasClass('sticky-bar')) {
              $('.card-title .title-text').text(activeText);
            } else {
              $('.card-title .title-text').text('Contents');
            }
          }
        });
    
        // Sidebar click event
        $(document).on('click', '#toc li', function(e) {
          e.stopPropagation(); // Prevent event from bubbling up
          $('#toc li').removeClass('active');
          $(this).addClass('active');
          var targetId = $(this).data('target');
          var $targetElement = $('#' + targetId);
          if ($targetElement.length) {
            isScrolling = true; // Set flag to true during animation
            $('html, body').animate({
              scrollTop: $targetElement.offset().top - stickyHeaderHeight
            }, 500, function() {
              isScrolling = false; // Reset flag after animation completes
            });
          }
        });
    
        // Mobile specific code
        if ($(window).width() < 768) {
          var mobile_list = $('#toc').html();
          $('.sidebar .title-list').html(mobile_list);
          $('.toc-card-body').on('click', function() {
            $(this).find('.title-list').slideToggle();
          });
    
          var mobile_scroll_height = stickyHeaderHeight + $('.toc-card-body').outerHeight() + 65;
          $(document).on('click', '.title-list li', function(e) {
            e.stopPropagation(); // Prevent the event from bubbling up
            const clickedText = $(this).contents().not($(this).children()).text().trim();
            $('.title-list li').removeClass('active');
            $(this).addClass('active');
            $('.card-title .title-text').text(clickedText);
    
            $('.toc-card-body .title-list').slideUp();
            const targetId = $(this).attr('id').replace('nav-', ''); // Assuming target heading ID is the same as li ID without 'nav-' prefix
            const $target = $('#' + targetId);
    
            if ($target.length) {
              setTimeout(function() {
                $('html, body').animate({
                  scrollTop: $target.offset().top - mobile_scroll_height
                }, 1000); // 1000 milliseconds for smooth scrolling
              }, 500);
            }
          });
    
          var stickyTop = $('.toc-card-body').offset().top - stickyHeaderHeight;
          $(window).on('scroll', function() {
            if ($(window).scrollTop() >= stickyTop) {
              $('.toc-card-body').addClass('sticky-bar');
            } else {
              $('.toc-card-body').removeClass('sticky-bar');
            }
          });
        }
    
      });
    }
    
    $(document).ready(function () {
      $(function () {
        $(".sub_menu ul").hide();
    
        if ($(".nav_active").length == 0) {
          $(".sub_menu a").click(function () {
            $(".nav_link").removeClass("nav_active");
            $(this).addClass("nav_active");
            $(this).parent(".sub_menu").children("ul.firstmenu").slideToggle("100");
          });
        } else if ($(".nav_active").length > 0) {
          $(".sub_menu a").click(function () {
            // $(".sub_menu a").parent(".sub_menu").children("ul").hide("100");
          });
        }
    
        $(".nav-sub-item ul").hide();
        $(".nav-sub-item a").click(function () {
          $(".nav-sub-item a")
            .parent(".nav-sub-item")
            .children(".nav-sub-menu")
            .hide();
          $(this)
            .parent(".nav-sub-item")
            .children(".nav-sub-menu")
            .slideToggle("100");
        });
      });
    });
    
    $(document).ready(function () {
      $(function () {
        $("#navigation li").removeClass("active");
        var HidMenuVal = $("#hidMn").val();
        $("#" + HidMenuVal).addClass("active");
      });
    
      // This is required for AJAX to work on our page
      var ajaxurl = ajaxurl.ajaxurl;
    
      function cvf_load_all_posts(page) {
        // Start the transition
        $(".cvf_pag_loading1.upcome").fadeIn().css("background", "#ccc");
    
        // Data to receive from our server
        // the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
        var data = {
          page: page,
          action: "demo-pagination-load-posts-upcome",
        };
    
        // Send the data
        $.post(ajaxurl, data, function (response) {
          // If successful Append the data into our html container
          $(".cvf_universal_container1.upcome-container").empty().append(response);
          // End the transition
          $(".cvf_pag_loading1.upcome").css({
            background: "none",
            transition: "all 1s ease-out",
          });
        });
      }
    
      // Load page 1 as the default
      cvf_load_all_posts(1);
    
      // Handle the clicks
      $("body").on(
        "click",
        ".cvf-universal-pagination ul li.active",
        function (event) {
          var page = $(this).attr("p");
          cvf_load_all_posts(page);
        }
      );
    });
    
    $(document).ready(function () {
      $(function () {
        $("#navigation li").removeClass("active");
        var HidMenuVal = $("#hidMn").val();
        $("#" + HidMenuVal).addClass("active");
      });
    
      // This is required for AJAX to work on our page
      var ajaxurl = window.location.origin + "/wp-admin/admin-ajax.php";
    
      function cvf_load_all_posts(page) {
        // Start the transition
        $(".cvf_pag_loading").fadeIn().css("background", "#ccc");
    
        // Data to receive from our server
        // the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
        var data = {
          page: page,
          action: "demo-pagination-load-posts",
        };
    
        // Send the data
        $.post(ajaxurl, data, function (response) {
          // If successful Append the data into our html container
          $(".cvf_universal_container").empty().append(response);
          // End the transition
          $(".cvf_pag_loading").css({
            background: "none",
            transition: "all 1s ease-out",
          });
        });
      }
    
      // Load page 1 as the default
      cvf_load_all_posts(1);
    
      // Handle the clicks
      $("body").on(
        "click",
        ".cvf-universal-pagination ul li.active",
        function (event) {
          var page = $(this).attr("p");
          cvf_load_all_posts(page);
        }
      );
    });
    
    // for animation
    $(function () {
      new WOW().init();
      // });
    });
    
    // for num counter
    
    if ($("#counter").length > 0) {
      var counted = 0;
      $(window).scroll(function () {
        var oTop = $("#counter").offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
          $(".count").each(function () {
            var $this = $(this),
              countTo = $this.attr("data-count");
            $({
              countNum: $this.text(),
            }).animate(
              {
                countNum: countTo,
              },
    
              {
                duration: 3000,
                easing: "swing",
                step: function () {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                  $this.text(this.countNum);
                  //alert('finished');
                },
              }
            );
          });
          counted = 1;
        }
      });
    }
    

    // for accordian img change
    $("#acrdn-img-1").addClass("active");
    $("#acrdn-btn-1").click(function () {
      $(".abt-img").removeClass("active");
      $("#acrdn-img-1").addClass("active");
    });
    
    $("#acrdn-btn-2").click(function () {
      $(".abt-img").removeClass("active");
      $("#acrdn-img-2").addClass("active");
    });
    
    $("#acrdn-btn-3").click(function () {
      $(".abt-img").removeClass("active");
      $("#acrdn-img-3").addClass("active");
    });
    
    $("#acrdn-btn-4").click(function () {
      $(".abt-img").removeClass("active");
      $("#acrdn-img-4").addClass("active");
    });
    
    $("#acrdn-btn-5").click(function () {
      $(".abt-img").removeClass("active");
      $("#acrdn-img-5").addClass("active");
    });
    
    $("#acrdn-btn-6").click(function () {
      $(".abt-img").removeClass("active");
      $("#acrdn-img-6").addClass("active");
    });
    



    // for case study full screen slider
    $(".js-navigate").on("click", function () {
      $(".js-navigate").removeClass("disabled");
      var current = $(".recipe.active");
      var findNext = $(current).next(".recipe");
      var findPrev = $(current).prev(".recipe");
      var button = $(this);
    
      $(current).removeClass("active");
      setTimeout(function () {
        if ($(button).hasClass("js-right")) {
          $(findNext).addClass("active");
          checkForDisable();
        } else if ($(button).hasClass("js-left")) {
          $(findPrev).addClass("active");
          checkForDisable();
        }
      }, 500);
    });
    
    function checkForDisable() {
      var current = $(".recipe.active");
      if ($(current).is(".recipe:last")) {
        $(".js-right").addClass("disabled");
      } else if ($(current).is(".recipe:first")) {
        $(".js-left").addClass("disabled");
      }
    }
    
    // for nav color change
    $(window).scroll(function () {
      if ($(this).scrollTop() > 700) {
        $(".navbar").removeClass("navbar-dark bg-dark");
        $(".navbar").addClass("navbar-light bg-light");
      } else {
        $(".navbar").removeClass("navbar-light bg-light");
        $(".navbar").addClass("navbar-dark bg-dark");
      }
    });
    
    // for case study slider
    $(".case-study-carousel").owlCarousel({
      items: 1,
      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 3400,
      smartSpeed: 500,
      autoplayHoverPause: true,
      nav: true,
      navigationText: [
        "<i class='bi bi-arrow-left'></i>",
        "<i class='fa bi-arrow-right'></i>",
      ],
    });
    $(".owl-prev").html('<i class="bi bi-arrow-left"></i>');
    $(".owl-next").html('<i class="bi bi-arrow-right"></i>');
    
    // for customer slider
    $(".customer-carousel").owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 2400,
      smartSpeed: 900,
      autoplayHoverPause: true,
      nav: false,
      responsive: {
        0: {
          items: 3,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 6,
        },
      },
    });
    
    // for customer slider
    $(".for-everyone").owlCarousel({
      loop: false,
      margin: 10,
      autoplay: false,
      autoplayTimeout: 2400,
      smartSpeed: 900,
      autoplayHoverPause: true,
      nav: false,
      responsive: {
        0: {
          items: 3,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 6,
        },
      },
    });
    
    // benifits slider of naas detail page
    $(".benifits-carousel").owlCarousel({
      items: 1,
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 3400,
      smartSpeed: 800,
      autoplayHoverPause: true,
      nav: true,
      responsive: {
        0: {
          items: 1500,
          loop: false,
        },
        577: {
          items: 1.2,
          loop: true,
        },
        1000: {
          items: 2.4,
          loop: true,
        },
      },
    });
    $(".owl-prev").html(
      '<i class="bi bi-arrow-left" data-magnetic data-cursor-text="Previous"></i>'
    );
    $(".owl-next").html(
      '<i class="bi bi-arrow-right" data-magnetic data-cursor-text="Next"></i>'
    );
    
    // testimonial slider
    if ($(".testimonial").length > 0) {
      $(".testimonial-carousel").owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 800,
        autoplayHoverPause: true,
        nav: true,
      });
      $(".owl-prev").html(
        '<i class="bi bi-arrow-left" data-magnetic data-cursor-text="Previous"></i>'
      );
      $(".owl-next").html(
        '<i class="bi bi-arrow-right" data-magnetic data-cursor-text="Next"></i>'
      );
    }
    
    // for the value slider
    $(".the-value-carousel").owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 1200,
      autoplayHoverPause: true,
      nav: true,
      items: 1,
      dots: true,
      autoHeight: false,
    });
    $(".the-value-carousel .owl-prev").html('<i class="bi bi-chevron-left"></i>');
    $(".the-value-carousel .owl-next").html('<i class="bi bi-chevron-right"></i>');
    
    
    
    
    // articles.js config for home page
    if ($("#particles-js").length > 0) {
      particlesJS("particles-js", {
        particles: {
          number: {
            value: 100,
            density: {
              enable: true,
              value_area: 1000,
            },
          },
          color: {
            value: "#ffffff",
          },
          shape: {
            type: "circle",
            stroke: {
              width: 0,
              color: "#000000",
            },
            polygon: {
              nb_sides: 5,
            },
            image: {
              // src: "img/github.svg",
              width: 100,
              height: 100,
            },
          },
          opacity: {
            value: 0.5,
            random: false,
            anim: {
              enable: false,
              speed: 1,
              opacity_min: 0.1,
              sync: false,
            },
          },
          size: {
            value: 3,
            random: true,
            anim: {
              enable: false,
              speed: 40,
              size_min: 0.1,
              sync: false,
            },
          },
          line_linked: {
            enable: true,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 1,
          },
          move: {
            enable: true,
            speed: 6,
            direction: "none",
            random: false,
            straight: false,
            out_mode: "out",
            bounce: false,
            attract: {
              enable: false,
              rotateX: 600,
              rotateY: 1200,
            },
          },
        },
        interactivity: {
          detect_on: "canvas",
          events: {
            onhover: {
              enable: true,
              mode: "grab",
            },
            onclick: {
              enable: true,
              mode: "push",
            },
            resize: true,
          },
          modes: {
            grab: {
              distance: 140,
              line_linked: {
                opacity: 1,
              },
            },
            bubble: {
              distance: 400,
              size: 40,
              duration: 2,
              opacity: 8,
              speed: 3,
            },
            repulse: {
              distance: 200,
              duration: 0.4,
            },
            push: {
              particles_nb: 4,
            },
            remove: {
              particles_nb: 2,
            },
          },
        },
        retina_detect: true,
      });
    }
    
    // for nautobot page nav color change
    if ($(".nautobot-landing").length > 0) {
      $(window).scroll(function () {
        if ($(window).scrollTop() < $(window).height() - 65) {
          $(".navbar").removeClass("navbar-light bg-light");
          $(".navbar").addClass("navbar-dark bg-dark");
        }
       
        else {
          if (
            $(window).scrollTop() > $(".neutobot-use-case").offset().top &&
            $(window).scrollTop() <
              $(".neutobot-use-case").offset().top +
                $(".neutobot-use-case").height()
          ) {
            $(".navbar").removeClass("navbar-light bg-light");
            $(".navbar").addClass("navbar-dark bg-dark");
          } else {
            $(".navbar").removeClass("navbar-dark bg-dark");
            $(".navbar").addClass("navbar-light bg-light");
          }
        }
      });
    }
    
    // custom js for mobile menu collapse
    
    $("nav.side-nav > .navbar-nav > .menu-item").addClass("first-menu");
    $("nav.side-nav > .navbar-nav > .menu-item > .sub-menu > li").addClass(
      "second-menu"
    );
    $(
      "nav.side-nav > .navbar-nav > .menu-item > .sub-menu > li > .sub-menu > li"
    ).addClass("third-menu");
      
    $(".side-menu .menu-item-has-children ul").hide();
    $(".first-menu > a").click(function () {
      if ($(this).parent(".first-menu").hasClass("active_nav")) {
        // $(".first-menu > ul").slideUp("100");
        $(this).parent(".first-menu").children("ul.sub-menu").slideToggle("100");
        // alert("asasdf");
        $(this).parent(".first-menu").toggleClass("active_nav");
      } else {
        $(".first-menu:not(.active_nav) > ul").slideUp("100");
        $(this).parent("first-menu").not().removeClass("active_nav");
        $(this).parent(".first-menu").children("ul.sub-menu").slideToggle("100");
        $(this).parent(".first-menu").toggleClass("active_nav");
      }
    });
    
    $(".second-menu > a").click(function () {
      $(".second-menu:not(.active_nav) > ul").slideUp("100");
      $(this).parent("second-menu").not().removeClass("active_nav");
      $(this).parent(".second-menu").children("ul.sub-menu").slideToggle("100");
      $(this).parent(".second-menu").toggleClass("active_nav");
    });
    
    $(".third-menu > a").click(function () {
      $(".third-menu:not(.active_nav) > ul").slideUp("100");
      $(this).parent("third-menu").not().removeClass("active_nav");
      $(this).parent(".third-menu").children("ul.sub-menu").slideToggle("100");
      $(this).parent(".third-menu").toggleClass("active_nav");
    });
    
    // scroll to second section
    $("#scroll-btn").click(function (event) {
      $("html, body").animate({ scrollTop: window.innerHeight * 0.8 - 66 }, 100);
    });
    // for nautobot sandbox page video popup
    if ($(".nautobot-video").length > 0) {
      $('[data-fancybox="gallery"]').fancybox({
        width: 850, // set the width
        height: 500,
        keyboard: true,
        gutter: 50,
        closeExisting: false,
        preventCaptionOverlap: true,
        arrows: true,
        infobar: true,
        smallBtn: "auto",
        toolbar: "auto",
        buttons: [
          "zoom",
          "download",
          "thumbs",
          "close",
        ],
        idleTime: 3,
        protect: false,
        slideShow: {
          autoStart: false,
          speed: 1000,
        },
        thumbs: {
          autoStart: false,
          hideOnClose: true,
          parentEl: ".fancybox-container",
          axis: "y",
        },
        helpers: {
          media: true,
        },
        youtube: {
          autoplay: 0,
        },
      });
    }
    $(function () {
      $("[data-bs-toggle='tooltip']").tooltip();
    });
    
    // for webinar page link
    if ($("#webinars").length > 0) {
      var urlMain = window.location.href;
      var arr = urlMain.split("#")[1];
      if (arr == "webinars") {
        $("#news").removeClass("active show");
        $(".nav-blog a").removeClass("active");
        $("#webinars").addClass("active show");
        $(".nav-event a").addClass("active");
      }
    }
    
    // for interpage link change
    if ($("#webinars").length > 0) {
      $(window).on("hashchange", function (e) {
        var urlMain = window.location.href;
        var arr = urlMain.split("#")[1];
        if (arr == "webinars") {
          $("#news").removeClass("active show");
          $(".nav-blog a").removeClass("active");
          $("#webinars").addClass("active show");
          $(".nav-event a").addClass("active");
        } else if (arr == "news") {
          $("#webinars").removeClass("active show");
          $(".nav-event a").removeClass("active");
          $("#news").addClass("active show");
          $(".nav-blog a").addClass("active");
        }
      });
    }
    
    // for adding classes in h3 tag of img content sections
    if ($(".img-content".length > 0)) {
      $(".img-content .content-box h3").addClass(
        "section_title wow animate__animated animate__fadeInUp"
      );
      $(".img-content .content-box h2").addClass(
        "section_title wow animate__animated animate__fadeInUp"
      );
    }
    
    // JS for dynamic populate field in CF7
    $(document).ready(function () {
      $(".single-key-card .btn-learn").click(function () {
        var section_category_id = $(this).parent().closest("div").attr("id");
        var category_title = $("#" + section_category_id + " h6").html();
        console.log(category_title);
        $("input[name=category]").val(category_title);
        $("div#getintouchcategory").attr("style", "display:block !important");
      });
    });
    
    $("#cta-modal").on("hidden.bs.modal", function () {
      $(".wpcf7-form").trigger("reset");
      $("div#getintouchcategory").attr("style", "display:none !important");
    });
    
    
    $(".cta-modal .modal-content .btn-close").click(function () {
      $('#contact-us-form').modal('hide');
      // alert('test');
      console.log("We set the cookie");
    
      var cookieexpirydate = new Date();
      cookieexpirydate.setTime(cookieexpirydate.getTime() + 24 * 60 * 60 * 1000);
    
      $.cookie("modalpopupopened", 1, {
        expires: cookieexpirydate,
        path: "/",
      });
    
    });
    
    $("div#contact-us-form").click(function () {
      console.log("We set the cookie");
      //$('#contact-us-form').modal('hide');
      var cookieexpirydate = new Date();
      cookieexpirydate.setTime(cookieexpirydate.getTime() + 24 * 60 * 60 * 1000);
    
      $.cookie("modalpopupopened", 1, {
        expires: cookieexpirydate,
        path: "/",
      });
    });
    
    //to open popup after 2 min
    if (window.location.pathname != "/") {
      if (typeof $.cookie("modalpopupopened") === "undefined") {
        console.log("Cookie not set");
        setTimeout(function () {
          $("#contact-us-form").modal("show");
        }, 120000);
      }
    }

    
    $(function () {
      $("[rel='tooltip']").tooltip();
    });
    
    setTimeout(function () {
      if ($(".platform-development").length > 0) {
        if ($(".image-box").length) {
          $('[data-fancybox="gallery"]').fancybox({
            width: 1050, // set the width
            // height: 500,
            buttons: [
              "zoom",
              //"share",
              // "slideShow",
              // "fullScreen",
              "download",
              "thumbs",
              "close",
            ],
            keyboard: true,
            gutter: 50,
            closeExisting: false,
            preventCaptionOverlap: true,
            arrows: true,
            infobar: true,
            smallBtn: "auto",
            toolbar: "auto",
    
            idleTime: 3,
            protect: false,
            slideShow: {
              autoStart: false,
              speed: 1000,
            },
            thumbs: {
              autoStart: false,
              hideOnClose: true,
              parentEl: ".fancybox-container",
              axis: "y",
            },
            helpers: {
              media: true,
            },
            youtube: {
              autoplay: 0,
            },
          });
        }
      }
    }, 2000);
    
    // for homepage static value instead of counter
    // for homepage static value instead of counter
    $(".page-home #counter .col-md-4:nth-child(4) p.count").removeAttr(
      "data-count"
    );
    $(".page-home #counter .col-md-4:nth-child(4) p.count").text("1");
    
    // to hide img popup for large screen in The Value section
    if ($(window).width() > 576) {
      $(".page-home .the-vlue-box .item a").removeAttr("data-fancybox");
      $(".page-home .the-vlue-box .item a").removeAttr("href");
    }
      
    
    // for file upload button
    if ($(".page-your-opportunities").length > 0) {
      function scrollToOpenPositionsSection() {
        var $target = $("section#test1");
        if (!$target.length) {
          $target = $("#test1").filter("section");
        }
        if ($target.length) {
          $("html, body").animate(
            { scrollTop: $target.offset().top - 120 },
            500
          );
        }
      }

      // Handle Open Positions and other in-page anchors on careers page.
      $(document).on("click", 'a[href="#test1"]', function (e) {
        e.preventDefault();
        if (window.history && window.history.pushState) {
          window.history.pushState(null, "", "#test1");
        } else {
          window.location.hash = "test1";
        }
        scrollToOpenPositionsSection();
      });

      if (window.location.hash === "#test1") {
        setTimeout(scrollToOpenPositionsSection, 300);
      }

      // ClearCompany appends the current hash to job links; keep job URLs clean.
      function stripHashFromCareerLinks() {
        $(".cc-job-title[href*='#']").each(function () {
          var href = $(this).attr("href");
          if (href && href.indexOf("#") !== -1) {
            $(this).attr("href", href.split("#")[0]);
          }
        });
      }

      stripHashFromCareerLinks();
      setTimeout(stripHashFromCareerLinks, 1500);
      setTimeout(stripHashFromCareerLinks, 3500);

      $(window).on("hashchange", function () {
        if (window.location.hash === "#test1") {
          scrollToOpenPositionsSection();
        }
      });

      $("#field_2_8").append(
        "<span type='button' id='custom-button'>Upload Your Resume</span>"
      );
      $("#field_2_8").append("<span id='custom-text'>No file chosen, yet.</span>");
    
      setTimeout(function () {
        const realFileBtn = document.getElementById("input_2_8");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");
    
        customBtn.addEventListener("click", function () {
          realFileBtn.click();
        });
    
        realFileBtn.addEventListener("change", function () {
          if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.match(
              /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[1];
          } else {
            customTxt.innerHTML = "No file chosen, yet.";
          }
        });
      }, 500);
    }
    
    $(document).ready(function () {
      // setTimeout(function() {
        $(".hero-value-carousel").owlCarousel({
          loop: true,
          autoplay: true,
          autoplayTimeout: 10000,
          smartSpeed: 1000,
          items: 1,
          rewind: false,
          mouseDrag: false,
          touchDrag: false,
          pullDrag: false,
          freeDrag: false,
          autoplayHoverPause:true,
          nav:true,
          dots: true,
          autoHeight: true,
          onInitialized: function () {
            $(".hero-section").addClass("height-auto-cls");
          },
  
      
        });
        $(".hero-value-carousel .owl-prev").html('<i class="bi bi-chevron-left"></i>');
        $(".hero-value-carousel .owl-next").html('<i class="bi bi-chevron-right"></i>');
    
      // }, 2500);
    
    });
    
    $(document).ready(function() {
        setTimeout(function() {
            $(".side-menu.hidden").css("height", "100vh");
        }, 300);
    });
    
    $('.custom-blog table').each(function(){
        $(this).wrap("<div class='table-box'></div>");
    });
    
    // $('.filter-box .checkbox-list').first().slideDown();
    // $('.filter-box h6').first().addClass('active');
    
    $('.apps-lft .filter-box:nth-child(3) .checkbox-list').first().slideDown();
    $('.apps-lft .filter-box:nth-child(3) h6').addClass("active");
    
    $('.filter-box h6').click(function() {
        var $cb_list = $(this).next('.checkbox-list');
        $('.filter-box .checkbox-list').not($cb_list).slideUp();
      $('.filter-box h6').not(this).removeClass('active');
        $(this).toggleClass('active');
        $cb_list.slideToggle();
    });
    
    jQuery(document).on('click', '.single a[href^="#"]', function(e) {
        // target element id
        var id = jQuery(this).attr('href');
     
        // target element
        var $id = jQuery(id);
        if ($id.length === 0) {
            return;
        }
     
        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();
     
        // top position relative to the document
        var pos = $id.offset().top - 300;
     
        // animated top scrolling
        jQuery('body, html').animate({scrollTop: pos});
});


  
// send custom form data to hubspot form functions js
function prepareHSFormSubmission(form) {
  console.log('Preparing form submission data'); // Debug message
  var submissionData = {};
  submissionData.submittedAt = Date.now();
  submissionData.fields = formFieldsToHSJSON(form);
  submissionData.context = buildHSContext();
  console.log('Prepared submission data:', submissionData); // Debug message
  return submissionData;
}

function formFieldsToHSJSON(form) {
  console.log('Converting form fields to JSON'); // Debug message
  let fieldArray = [];
  let formData = new FormData(form);
  for (let field of formData) {
    let values = {
      name: field[0],
      value: field[1],
    };
    fieldArray.push(values);
  }
  console.log('Converted form fields:', fieldArray); // Debug message
  return fieldArray;
}

function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) {
    return parts.pop().split(";").shift();
  }
}

function buildHSContext() {
  console.log('Building HS context'); // Debug message
  let hsContext = {};
// hsContext.hutk = getCookie("hubspotutk") || "";
  hsContext.pageUri = window.location.href;
  hsContext.pageName = document.title;
  console.log('Built HS context:', hsContext); // Debug message
  return hsContext;
}

async function postData(url = "", data = {}) {
  console.log('Posting data to URL:', url); // Debug message
  console.log('Data being posted:', data); // Debug message
  const response = await fetch(url, {
    method: "POST",
    mode: "cors",
    cache: "no-cache",
    credentials: "same-origin",
    headers: {
      "Content-Type": "application/json",
      "Accept": "application/json",
    },
    redirect: "follow",
    referrerPolicy: "no-referrer",
    body: JSON.stringify(data),
  });
  if (!response.ok) {
    throw new Error(`HTTP error! status: ${response.status}`);
  }
  const jsonResponse = await response.json();
  console.log('Received response:', jsonResponse); // Debug message
  return jsonResponse;
}

async function submitHSForm(hsFormURL, data) {
  console.log('Submitting form to HubSpot URL:', hsFormURL); // Debug message
  try {
    let response = await postData(hsFormURL, data);
    console.log('HubSpot Response:', response); // Log HubSpot response
    return response;
  } catch (error) {
    console.error("Error submitting to HubSpot:", error);
    throw error;
  }
}


if ($('#toc').length > 0) {
  
}

jQuery(document).ready(function ($) {

  // Loop through each testimonial carousel
$(".testi-carousel").each(function (index) {
  let carouselId = "testimonial-carousel-" + (index + 1);
  let $carousel = $(this);
  
  // Assign a unique ID if not already set
  if (!$carousel.attr("id")) {
    $carousel.attr("id", carouselId);
  }

  let totalItems = $carousel.find(".slider-container").length;

  if (totalItems >= 2) {
    // ✅ If 2 or more → activate slider
    $carousel.addClass("owl-carousel owl-theme").show();
    $carousel.owlCarousel({
      items: 1,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 800,
      autoplayHoverPause: true,
      nav: true,
      loop: true,
    });

    // Custom nav arrows
    $("#" + carouselId + " .owl-prev").html(
      '<i class="bi bi-arrow-left" data-magnetic data-cursor-text="Previous"></i>'
    );
    $("#" + carouselId + " .owl-next").html(
      '<i class="bi bi-arrow-right" data-magnetic data-cursor-text="Next"></i>'
    );
  } else {
    // ✅ If only 1 → no slider, just show single testimonial
    $carousel.removeClass("owl-carousel owl-theme").show();
  }
});

});


if($('.cf-accordion').length > 0){
        $('.cf-accordion').each(function () {
            const $accordion = $(this);
            const $future = $accordion.find('.future-netdev');
            const $row = $accordion.find('.row').first();
          
            if ($future.length && $row.length) {
              $future
                .wrap('<div class="col-lg-6"></div>')
                .parent()
                .appendTo($row);
		}
	});
	var $oldHeading = $('.cf-accordion.cf-top-title .title-box .section-title').first();

	var $h4 = $('<h4>', {
	  html: $oldHeading.html(),
	  class: $oldHeading.attr('class')
	});

	$('.cf-accordion.cf-top-title .container').prepend($h4);
}

// Left Side Img
const $ls_Section = $('#left-side-img');
if ($ls_Section.length) {
  const $future = $ls_Section.find('.future-netdev');

  if ($future.length) {
    // Create new column
    const $newCol = $('<div class="col-lg-6"></div>');

    // Move future-netdev inside new column
    $newCol.append($future);

    // Append new column to row
    $ls_Section.find('.row').append($newCol);
  }
}