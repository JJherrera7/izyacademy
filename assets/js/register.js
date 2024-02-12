const signupCheckBoxes = Array.from(document.querySelectorAll("#registro-tyc, #registro-ptd"));
const sendSignUp = document.querySelector("#enviar-formulario");
const signUpForm = document.querySelector("#registro-formulario");

signupCheckBoxes.forEach(e => e.addEventListener("click", () => {
    if (signupCheckBoxes.find(e => !e.checked)) {
        sendSignUp.classList.add("!bg-primary/60", "cursor-default");
        sendSignUp.disabled = true;
        return;
    };

    sendSignUp.classList.remove("!bg-primary/60", "cursor-default")
    sendSignUp.disabled = false;
}));

sendSignUp.addEventListener("click", () => {
    const fixes = [];
    const formData = new FormData(signUpForm);

    const data = Object.fromEntries(formData.entries());

    if (/[^a-zA-Z\s]/g.test(data.name)) {
        fixes.push("El nombre solo puede contener letras y espacios.");
    }

    if (/[^a-zA-Z\s]/g.test(data.lastname)) {
        fixes.push("El nombre solo puede contener letras y espacios.");
    }

    if (!/^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/g.test(data.email)) {
        fixes.push("El correo no es válido.");
    }

    if (data.password !== data.confirm) {
        fixes.push("Las contraseñas no coinciden.");
    }

    if (fixes.length) {
        return alert(fixes.join("\n"));
    }

    signUpForm.submit();
});