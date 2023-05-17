$(document).scroll(function () {
  var y = $(this).scrollTop();
  if (y > 650) {
    $(".call-mob").addClass("show-btn");
  } else {
    $(".call-mob").removeClass("show-btn");
  }
});

$(".notification_img").hide();
$(".footer-close").hide();
$(document).ready(function () {
  let screenWidth = $(window).width();
  console.log(screenWidth);

  if (screenWidth > 768) {
    $(".enquiryBtn").click(function (e) {
      e.preventDefault();
      $(".overlay").addClass("modal-backdrop fade show");
      $(".footer-section").addClass("darkBlueBgColor");
      $(".footer-section").removeClass("bgBlueDark");
      $(".notification_img").show();
      $("#call-back-form").css({ padding: "20px" });
      $(".footer-section").animate({ height: 120 }, 200);
      $("#name").focus();
      $(".footer-close").show();
    });

    $(".footer-close").click(function (e) {
      e.preventDefault();
      $(".overlay").removeClass("modal-backdrop fade show");
      $(".footer-section").addClass("bgBlueDark");
      $(".notification_img").hide();
      $("#call-back-form").css({ padding: "0" });
      $(".footer-section").removeClass("darkBlueBgColor");
      $(".footer-section").animate({ height: 70 }, 200);
      $(".footer-close").hide();
    });
  } else {
    $(".enquiryBtn").click(function () {
      window.location.href = "#free-call";
    });
  }
});

/*
$(document).ready(function() {
  $('#call-back-form').submit(function(e) {
    e.preventDefault();
    let name = $('#name').val();
    let phone = $('#phone').val();
    let email = $('#email').val();

    AjaxSendForm(name, email, phone);
  
  });
});

function AjaxSendForm(name, email, phone) {
  $.ajax({
      type: 'POST',
      url: 'callBack.php',
      data: {name: name, email: email, phone: phone},
      beforeSend: function() {
          $('.call-btn').text('Submitting');
          $('.call-btn').attr('disabled', 'disabled');
          $(".name_err").text('');
          $(".phone_err").text('');
          $(".email_err").text('');
      },
      success: function(response) {
        if (!response.success) {
          if (response.errors.name) {
            $(".name_err").text(response.errors.name);
          }

          if (response.errors.phone) {
            $(".phone_err").text(response.errors.phone);
          }

          if (response.errors.email) {
            $(".email_err").text(response.errors.email); 
          }
          $('.call-btn').text('Get Free Call Now');
          $('.call-btn').removeAttr('disabled', 'disabled');
        } else {
          window.location.href = 'thank-you.html';
        }
      },
      error: function(xhr) {
        alert("Error occured.please try again");
        $('.call-btn').text('Get Free Call Now');
        $('.call-btn').removeAttr('disabled', 'disabled');
      },
      complete: function() {
        $('.response').removeClass('loading');
        $('.call-btn').text('Get Free Call Now');
        $('.call-btn').removeAttr('disabled', 'disabled');
      },
      dataType: 'json'
  });
}

*/

$(document).ready(function () {
  $(".keywords-sec").hide();
  $(".close-footer > span").click(function () {
    $(".keywords-sec").slideToggle();
    $(this).find("i").toggleClass("rotate-footer-close-arrow");
    // $(".close-footer").toggleClass("mb-5 mb-md-0");
    if ($(this).find("span").text() == "Close footer") {
      $(this).find("span").text("Open footer");
    } else {
      $(this).find("span").text("Close footer");
      $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    }
  });
});

$(".collapser").click(function () {
  $(this).parent().next().collapse("toggle");
  $(this).toggleClass("package-details");
  $(".collapser").not(this).parent().next().collapse("hide");
  $(".collapser").not(this).removeClass("package-details");
});

$(document).ready(function () {
  $(".patients-slider").slick({
    arrows: false,
    dots: true,
    autoplay: false,
    autoplaySpeed: 1500,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,

          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1.1,
          autoplay: false,
          slidesToScroll: 1,
          dots: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1.1,
          autoplay: false,
          slidesToScroll: 1,
          dots: true,
        },
      },
    ],
  });
});

$(document).ready(function () {
  $(".dr-slider").slick({
    arrows: false,
    dots: false,
    autoplay: false,
    autoplaySpeed: 1500,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,

          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1.3,
          autoplay: false,
          slidesToScroll: 1,
          dots: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1.3,
          autoplay: false,
          slidesToScroll: 1,
          dots: false,
        },
      },
    ],
  });
});

$(document).ready(function () {
  $(".appointment-btn").click(function () {
    $(".overlay").addClass("modal-backdrop fade show");
    $("body").addClass("no-overflow");

    $(".form-cov").addClass("form-high");
    setTimeout(function () {
      $(".form-close").show();
    }, 500);
    if ($(window).width() >= 768) {
      window.location.href = "#form-d";
      $(".name-f").focus();
    } else {
      window.location.href = "#";
    }
  });

  $(".form-close").click(function () {
    $(".overlay").removeClass("modal-backdrop fade show");
    $(".form-cov").removeClass("form-high");
    $("body").removeClass("no-overflow");
    $(this).hide();
  });
});

function onlyNumberKey(evt) {
  // Only ASCII character in that range allowed
  var ASCIICode = evt.which ? evt.which : evt.keyCode;
  if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
  return true;
}
