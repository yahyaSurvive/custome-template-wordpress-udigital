const toContact = document.querySelectorAll(".to-contact");

toContact.forEach((el) => {
  el.addEventListener("click", function (event) {
    window.location.href = "/contact.html";
  });
});
