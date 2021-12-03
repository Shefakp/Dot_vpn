// // -----------------  Табы  --------------------
// $(".nav-wrapp__link").hover(function (e) {
//   e.preventDefault();
//   $(".news-body-tab").removeClass("news-body-tab--active");
//   $(".nav-wrapp__link").removeClass("tab-active");

//   $($(this).attr("href")).addClass("news-body-tab--active");
//   $(this).addClass("tab-active");
// });

// // -----------------  Селект  --------------------

// // переменная не переназначается, поэтому используем const
// // используем querySelectorAll, чтобы собрать массив со всеми сущностями .select
// const select = document.querySelectorAll(".select");

// // если массив не пустой, пробегаемся в цикле по каждой найденой сущности
// if (select.length) {
//   select.forEach((item) => {
//     // достаем из текущей сущности .select__current
//     const selectCurrent = item.querySelector(".select__current");

//     item.addEventListener("click", (event) => {
//       const el = event.target.dataset.choice;
//       const text = event.target.innerText;

//       // Проверяем является ли это choosen и не выбрано ли его значение уже
//       if (el === "choosen" && selectCurrent.innerText !== text) {
//         selectCurrent.innerText = text;
//       }

//       item.classList.toggle("is-active");
//     });
//   });
// }


// // -----------------  Гамбургер  --------------------
// $(".hamburger").click(function (event) {
//   $(".hamburger").toggleClass("hamburger__active"),
//     $(".mobile__menu ").toggleClass("mobile__menu__active");
// });

// // ----------------- Аккордион --------------------
// /**
//  * Классы для аккордиона
//  */
// const accordeon = {
//   CLASS: 'accordion',
//   CLASS_ACTIVE: 'accordion__active',
// }

// /**
//  * acc - неизменная переменная для работы с аккордионом
//  */
// const acc = document.querySelectorAll(`.${accordeon.CLASS}`);
// let openedAccordeon = null;

// /**
//  * использует nextElementSibling для открытия или закрытия аккордиона
//  */
// function closeAccordeon(acc) {
//   acc.nextElementSibling.style.maxHeight = 0;
//   acc.classList.remove(accordeon.CLASS_ACTIVE);
// }


// function openAccordeon(acc) {
//   acc.nextElementSibling.style.maxHeight = `${acc.nextElementSibling.scrollHeight}px`;
//   acc.classList.add(accordeon.CLASS_ACTIVE);
// }

// /**
//  * Проверка на открытие аккордиона !nextElementSibling!
//  */
// function isAccordeonOpen(acc) {
//   acc.nextElementSibling && !acc.nextElementSibling.style.maxHeight
// }

// /**
//  * Итерация, реализация переключения открытого аккордиона
//  *
//  */
// for (const accordeon of acc) {
//   accordeon.addEventListener("click", function () {
//     const currentAccordeon = this;

//     openedAccordeon && closeAccordeon(openedAccordeon);

//     if (isAccordeonOpen(currentAccordeon)) {
//       closeAccordeon(currentAccordeon);
//     } else {
//       openAccordeon(currentAccordeon);
//       openedAccordeon = currentAccordeon;
//     }
//   });
// };

// // --------------

// const accordionList = document.getElementsByClassName("accordion--multiple");
// const classNameActive = "accordion--active";

// for (const accordion of accordionList) {
//   accordion.addEventListener("click", function () {
//     this.classList.toggle(classNameActive);
//     const panel = this.nextElementSibling;
//     if (panel.style.maxHeight) {
//       panel.style.maxHeight = null;
//     } else {
//       panel.style.maxHeight = panel.scrollHeight + "px";
//     }
//   });
// }



$(document).ready(function () {
  $('.header__burger').click(function (event) {
    $('.header__burger,.header__menu,.dwnl').toggleClass('active');
    $('body').toggleClass('lock');
  });
});



$(document).ready(function () {
  var button = $('.btn__up');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1000) {
      button.fadeIn();
    } else {
      button.fadeOut();
    }

  });
  button.on('click', function () {
    $('body, html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});

var swiper = new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


function blocktimer(idtimer, timetimes, timesnows, member) {
  var timetimes = timetimes;
  timetimes = timetimes.split(", ");
  var timesnows = timesnows;
  var ts = new Date(timetimes[0], timetimes[1], timetimes[2]);
  if ((new Date()) > ts) {
    ts = (new Date()).getTime() + timesnows;
  }
  $(idtimer).countdown({
    timestamp: ts,
    callback: function (days, hours, minutes, seconds) {}
  });
}


$(document).ready(function () {
  blocktimer('#countdown', '2021, 1, 1', 24 * 02 * 60 * 60 * 1000);
});

$(window).ready(function () {
  $(".loader").delay(400).fadeOut("slow");
});



