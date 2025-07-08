console.log("animation-hero.js loaded");

window.addEventListener("load", function () {
  setTimeout(function () {
    console.log("Adding .animate class");
    document.querySelector(".hero__titre").classList.add("animate");
  }, 100);
});
