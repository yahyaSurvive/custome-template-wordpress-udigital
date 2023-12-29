// Select all elements with the class "form-validated"
const forms = document.querySelectorAll(".form-validated");

// Loop over each form
forms.forEach((form) => {
  form.addEventListener("submit", function (event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }

    form.classList.add("was-validated");
  });
});

const nameInputs = document.querySelectorAll(".text-validation");

nameInputs.forEach((nameInput) => {
  nameInput.addEventListener("input", function (event) {
    const inputValue = nameInput.value;
    const validCharacters = /^[a-zA-Z0-9.,\s]*$/;

    if (!validCharacters.test(inputValue)) {
      nameInput.value = inputValue.slice(0, -1);
    }
  });
});
