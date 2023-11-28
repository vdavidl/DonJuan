const $links = document.querySelectorAll(".nav-item a");

addEventListener("click", (e) => {
  if (e.target.matches(".nav-item a")) {
    localStorage.setItem("linkClickeado", e.target.innerHTML);
  }
  if (e.target.matches(".navbar-brand img")) {
    localStorage.removeItem("linkClickeado");
  }
});

addEventListener("DOMContentLoaded", (e) => {
  $links.forEach((link) => {
    if (localStorage.getItem("linkClickeado") === link.innerHTML) {
      link.classList.add("active");
    }
  });
});
