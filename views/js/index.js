function togglePassword(fieldId, button) {

    const field = document.getElementById(fieldId);

    if (field.type === "password") {
        field.type = "text";
        button.innerHTML = "Hide";
    }
    else {
        field.type = "password";
        button.innerHTML = "Show";
    }
}

