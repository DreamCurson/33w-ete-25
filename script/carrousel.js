console.log("Carrousel en execution");

(function () {
  const carrousels = document.querySelectorAll(".carrousel");
  const radios = document.querySelectorAll(".carrousel__radio");

  function initialise_carrousel() {
    carrousels.forEach((carrousel) => {
      carrousel.style.opacity = 0;
    });
  }

  radios.forEach((radio, i) => {
    radio.addEventListener("change", () => {
      initialise_carrousel();
      if (radio.checked) {
        carrousels[i].style.opacity = 1;
      }
    });
  });

  initialise_carrousel();
  carrousels[0].style.opacity = 1;
})();
