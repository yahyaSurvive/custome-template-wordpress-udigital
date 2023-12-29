document.addEventListener("DOMContentLoaded", function () {
  let currentUrl = window.location.href;

  let navLinks = document.querySelectorAll(".nav-link");

  navLinks.forEach(function (link) {
    let linkUrl = link.getAttribute("href");

    if (currentUrl === linkUrl) {
      link.classList.add("active");
    }
  });
});
