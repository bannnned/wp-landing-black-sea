
$(document).ready(function () {
  if ($(".slider__media").length == 1) {
    $(".slider__media").slick({
      arrows: false,
      dots: true,
      adaptiveHeight: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 1000,
      easing: "easeOutExpo",
      infinite: true,
      initialSlide: 0,
      autoplay: true,
      autoplaySpeed: 2500,
      pauseOnFocused: true,
      pauseOnHover: true,
      pauseOnDotsHover: true,
      draggable: true, //Swipe on desktops
      swipe: true, //Swipe on mobile
      touchThreshold: 5, //"Усилия" для перелистывания слайдов
      touchMove: true, //Возможность двигать слайды
      waitForAnimate: true, //Задержка перед перелистыванием
      centerMode: false, //Центральный слайд по центру
      variableWidth: false, //Адаптивная ширина
      rows: 1,
      vertical: false, //
      verticalSlider: false, //
      fade: false, //Slideshow
    });
  }
  $(".header-burger").click(function () {
    $(".header__links-burger").toggleClass("active");
    $("body").toggleClass("disabled");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".block-3__form");
  form.addEventListener("submit", formSend);
  async function formSend(e) {
    e.preventDefault();
    let error = formValidate();
    let formData = new FormData(form);
    if (error == 0) {
        console.log()
      let res = await fetch("/../../sendmail.php", { method: "POST", body: formData });
      if(res.ok) {
          let res = await res.json();
          console.log(res.message);
          form.reset()
      } else {
          console.log('error')
      }
    }
  }

  function formValidate() {
    let error = 0;
    let formReq = document.querySelectorAll("._req");
    for (let i = 0; i < formReq.length; i++) {
      const input = formReq[i];
      formRemoveError(input);
      if (input.classList.contains("_email")) {
        if (emailValidation(input)) {
          formAddError(input);
          error++;
        }
      }
      if (input.classList.contains("_name")) {
        if (!input.value) {
          formAddError(input);
          error++;
        }
      }
    }
    return error;
  }

  function formAddError(input) {
    input.classList.add("_error");
  }
  function formRemoveError(input) {
    input.classList.remove("_error");
  }

  //Email validation
  function emailValidation(input) {
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(input.value);
  }
});
