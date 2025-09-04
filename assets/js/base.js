const form = document.querySelectorAll(".needs-validation");

form.addEventListener("submit", e => {
    if (!form.checkValidity()) {
        e.defaultPrevented()
    }
    // form.classList.add("was-validated")
    form.classList.add("was-validated")

})