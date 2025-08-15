(function () {
  const list_categories = document.querySelectorAll(".list_categories li");

  // Get the domain base URL
  const domaine = document.querySelector("base").href;

  // Always select the first category on page load
  if (list_categories.length > 0) {
    const firstCategory = list_categories[0];
    firstCategory.classList.add("selected");
    const categoryId = firstCategory.dataset.id;
    mon_fetch(categoryId);
  }

  list_categories.forEach((categorie) => {
    categorie.addEventListener("mousedown", (e) => {
      list_categories.forEach((btn) => {
        btn.classList.remove("selected");
      });

      categorie.classList.add("selected");

      const categoryId = categorie.dataset.id;
      mon_fetch(categoryId);
    });
  });

  function mon_fetch(categoryId) {
    const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
    fetch(apiUrl)
      .then((response) => response.json())
      .then((data) => {
        const destinationList = document.querySelector(".destination__list");
        destinationList.innerHTML = "";
        data.forEach((article) => {
          const articleElement = document.createElement("div");
          articleElement.innerHTML = `
            <label class="accordeon" for="accordeon__chk__${article.id}">
              <h3>${article.title.rendered}</h3>
            </label>
            <input type="checkbox" class="accordeon__chk" id="accordeon__chk__${article.id}">
            <div class="accordeon__excerpt">${article.excerpt.rendered}
              <a href="${article.link}">Lire plus</a>
            </div>
          `;
          destinationList.appendChild(articleElement);

          const checkbox = articleElement.querySelector(".accordeon__chk");
          const accordeon = articleElement.querySelector(".accordeon");
          const excerpt = articleElement.querySelector(".accordeon__excerpt");

          checkbox.addEventListener("change", () => {
            if (checkbox.checked) {
              excerpt.style.display = "block";
              accordeon.classList.add("open");
            } else {
              excerpt.style.display = "none";
              accordeon.classList.remove("open");
            }
          });

          excerpt.style.display = "none";
        });
      })
      .catch((error) =>
        console.error("Erreur lors de la récupération des articles:", error)
      );
  }
})();
