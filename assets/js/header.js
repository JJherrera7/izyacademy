const openLoginForm = document.querySelector("#abrir-sesion-formulario")

if (openLoginForm) {
    const loginForm = document.querySelector("#sesion-formulario");
    const closeLoginForm = document.querySelector("#cerrar-sesion-formulario");

    openLoginForm.addEventListener("click", () => loginForm.classList.add("!flex"));
    closeLoginForm.addEventListener("click", () => loginForm.classList.remove("!flex"));
}