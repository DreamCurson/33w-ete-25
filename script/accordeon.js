(function () {
  const accordions = document.querySelectorAll(".accordeon");

  accordions.forEach((accordion) => {
    accordion.addEventListener("click", () => {
      accordion.classList.toggle("open");
    });
  });
})();
