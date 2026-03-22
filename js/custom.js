jQuery(document).ready(function () {

  // ===== Sidebar Menu Js ===== //

  jQuery('.nav-item').click(function () {
    // Remove active class from all menu items
    jQuery('.nav-item').removeClass('active');

    // Add active class to clicked menu item
    jQuery(this).addClass('active');

    // Toggle submenu for items with submenu
    if (jQuery(this).hasClass('has-submenu')) {
      jQuery(this).find('.sub-menu').slideToggle();
    }

    // Close other open submenus
    jQuery('.nav-item').not(this).find('.sub-menu').slideUp();
  });

  // ===== Sidebar Rubrics Js ===== //

  jQuery('#sidebarRubricsBtn').click(function () {
    // Toggle show-all class from rubrics list
    jQuery('#sidebarRubrics .nav-menu').toggleClass('show-all');

    // Toggle text from button
    jQuery(this).text(jQuery('#sidebarRubrics .nav-menu').hasClass('show-all') ? 'Скрыть' : 'Показать все...');
  });

  // ===== Topic Tabs Js ===== //

  // jQuery(".topic-tabs").on("click", ".topic-tabs-link ", function (e) {
  //   e.preventDefault();
  //   jQuery(".topic-tabs-link").removeClass("active");
  //   jQuery(".topic-content").removeClass("show");
  //   jQuery(this).addClass("active");
  //   jQuery(".topic-content").addClass("hidden");
  //   jQuery(jQuery(this).attr("href")).addClass("show").removeClass("hidden");
  // });

  // ===== Sidebar Toggle Js ===== //

  jQuery(".menu-toggle").click(function () {
    jQuery(".sidebar").toggleClass("show");
  });

  // ===== Mobile Search Toggle Js ===== //

  jQuery(".search-ico").click(function () {
    jQuery(".mobile-search").addClass("show");
  });
  jQuery(".search-close").click(function () {
    jQuery(".mobile-search").removeClass("show");
  });
  jQuery(document).mouseup(function (e) {
    var container = jQuery(".mobile-search");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.removeClass("show");
    }
  });

  // ===== Post Swiper Slider Js ===== //
  if (jQuery(".post-slider .post-slider-wrapper").length > 0) {
    var swiper = new Swiper(".post-slider .post-slider-wrapper", {
      navigation: {
        nextEl: ".post-slider-wrapper .swiper-button-next",
        prevEl: ".post-slider-wrapper .swiper-button-prev",
      },
      pagination: {
        el: ".post-slider-wrapper .swiper-pagination",
      },
    });

  }

  // ===== Notification-dropwdown js ===== //

  jQuery(document).on('click', ".notification-ico", function () {
    jQuery(".notification-dropdown-popup").removeClass("hidden")
  });
  jQuery(document).mouseup(function (e) {
    var container = jQuery(".notification-dropdown-popup");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.addClass("hidden");
    }
  });

  // ===== Notification Tabs Js ===== //

  jQuery('.tab-btn').click(function () {
    // Remove active class from all buttons
    jQuery('.tab-btn').removeClass('active border-b-2 border-gray-900 text-gray-800');
    // Add active class to clicked button
    jQuery(this).addClass('active border-b-2 border-gray-900 text-gray-900');

    // Hide all tab panes
    jQuery('.tab-pane').addClass('hidden');

    // Show the clicked tab's content
    var index = jQuery(this).index();
    jQuery('.tab-pane').eq(index).removeClass('hidden');
  });


  // ===== User-dropwdown js ===== //

  jQuery(document).on('click', ".user-dropdown > a", function () {
    jQuery(".user-dropdown-popup").removeClass("hidden")
  });
  jQuery(document).mouseup(function (e) {
    var container = jQuery(".user-dropdown-popup");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.addClass("hidden");
    }
  });

  // ===== Avatar js ===== //

  jQuery(document).ready(function () {
    var readURL = function (input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          jQuery(".profile-pic").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    };

    jQuery(".file-upload").on("change", function () {
      readURL(this);
    });

    jQuery(".upload-button").on("click", function () {
      jQuery(".file-upload").click();
    });
  });

  // ===== Cover js ===== //

  jQuery(document).ready(function () {
    var readURL = function (input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          jQuery(".cover-photo").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    };

    jQuery(".cover-upload").on("change", function () {
      readURL(this);
    });

    jQuery(".upload-button").on("click", function () {
      jQuery(".cover-upload").click();
    });
  });

  // ===== Social Share Siide js ===== // 

  jQuery(".post #toggleSocial1").on("click", function () {
    jQuery(this).parents('.post').find('#SocialOption').slideToggle();
  });

  // ===== Reply js ===== // 

  jQuery(".comment-item .reply-now").on("click", function () {
    var commentItem = jQuery(this).closest(".comment-item");

    // Toggle the class on the .comment-item element
    commentItem.toggleClass("active");

    // Check if the class is active
    if (commentItem.hasClass("active")) {
      // Add the HTML first, but hide it initially
      commentItem.append('<form class="reply-forms bg-gray-500 p-4 rounded flex flex 2sm:flex-nowrap flex-wrap items-start mb-6"><a href="javascript:;" class="2sm:flex hidden 2sm:max-w-[30px] w-full 2sm:h-[30px] max-w-[28px] h-[28px] rounded-full overflow-hidden me-3"><img height="30" width="30" src="image/user-1.png" alt="/" class="w-full h-full"></a><textarea class="w-full h-[95px] font-matter px-3 py-2 rounded text-base text-gray-900 placeholder:font-matter placeholder:text-base placeholder:text-gray-800 focus-visible:outline-none border border-gray-400 focus:border-gray-400" type="text" name="text" placeholder="Add a comment…"></textarea><div class="flex justify-between items-center 2sm:w-fit w-full 2sm:mt-0 mt-3"><a href="javascript:;" class="2sm:hidden flex 2sm:max-w-[30px] w-full 2sm:h-[30px] max-w-[28px] h-[28px] rounded-full overflow-hidden me-3"><img height="30" width="30" src="image/user-3.png" alt="/" class="w-full h-full"></a><a href="javascript:;" class="btn-primary flex ms-3">Send</a></div></form>');
      // Then slide it down to show
      commentItem.find(".reply-forms").hide().slideDown();
    } else {
      // Slide up the reply-box and remove it after the animation completes
      commentItem.find(".reply-forms").slideUp(function () {
        jQuery(this).remove();
      });
    }
  });

  // ===== Follow Following js ===== //

  jQuery('.post .btn-small').click(function () {
    jQuery(this).toggleClass('following');

    if (jQuery(this).hasClass('following')) {
      jQuery(this).text('Вы подписаны');
    } else {
      jQuery(this).text('Подписаться');
    }
  });


  // ===== Follow Following js ===== //
  jQuery(document).ready(function () {
    var swiper = new Swiper(".categories .swiper", {
      slidesPerView: 'auto',
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next-categories",
        prevEl: ".swiper-button-prev-categories",
      },
      breakpoints: {
        768: {
          navigation: {
            nextEl: ".swiper-button-next-categories",
            prevEl: ".swiper-button-prev-categories",
          },
        },
        0: {
          navigation: false,
        }
      }
    });
  });














});