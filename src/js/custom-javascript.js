// Add your custom JS here.
const blob1 = document.querySelector("#blob1");
const blob2 = document.querySelector("#blob2");

if (blob1 && blob2) {
  KUTE.fromTo(
    "#blob1",
    { path: "#blob1" },
    { path: "#blob2" },
    { repeat: 999, duration: 3000, yoyo: true }
  ).start();
}

(function ($) {
  "use strict";

  if (
    matchMedia("screen and (min-width: 0px) and (max-width: 1024px)").matches
  ) {
    $(".nav-link").on("click", function () {
      $(".navbar-collapse").removeClass("show");
    });
    console.log("click");
  }
})(jQuery);
