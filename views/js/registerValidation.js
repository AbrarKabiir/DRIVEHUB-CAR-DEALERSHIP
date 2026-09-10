function validateRegisterForm() {

    let hasErr = false;

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const password = document.getElementById("password").value;
    const conPassword = document.getElementById("conPassword").value;
    const securityQuestion = document.getElementById("securityQuestion").value;
    const securityAnswer = document.getElementById("securityAnswer").value.trim();

    const nameErr = document.getElementById("nameErr");
    const emailErr = document.getElementById("emailErr");
    const phoneErr = document.getElementById("phoneErr");
    const passwordErr = document.getElementById("passwordErr");
    const conPasswordErr = document.getElementById("conPasswordErr");
    const securityQuestionErr = document.getElementById("securityQuestionErr");
    const securityAnswerErr = document.getElementById("securityAnswerErr");

    nameErr.innerHTML = "";
    emailErr.innerHTML = "";
    phoneErr.innerHTML = "";
    passwordErr.innerHTML = "";
    conPasswordErr.innerHTML = "";
    securityQuestionErr.innerHTML = "";
    securityAnswerErr.innerHTML = "";

    let nameRegex = /^[a-zA-Z' -]+$/;

    if (name === "") {
        nameErr.innerHTML = "Name cannot be empty";
        hasErr = true;
    }
    else if (name.length < 3) {
        nameErr.innerHTML = "Name must be at least 3 characters";
        hasErr = true;
    }
    else if (!nameRegex.test(name)) {
        nameErr.innerHTML = "Name cannot contain numbers or special characters";
        hasErr = true;
    }

    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (email === "") {
        emailErr.innerHTML = "Email cannot be empty";
        hasErr = true;
    }
    else if (!emailRegex.test(email)) {
        emailErr.innerHTML = "Invalid email format";
        hasErr = true;
    }

    let phoneRegex = /^[0-9+() -]+$/;

    if (phone === "") {
        phoneErr.innerHTML = "Phone number cannot be empty";
        hasErr = true;
    }
    else if (!phoneRegex.test(phone)) {
        phoneErr.innerHTML = "Phone can only contain numbers, +, (), - and spaces";
        hasErr = true;
    }

    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (password === "") {
        passwordErr.innerHTML = "Password cannot be empty";
        hasErr = true;
    }
    else if (!passwordRegex.test(password)) {
        passwordErr.innerHTML = "Password needs at least 8 characters, one small letter, one capital letter, one number and one special character";
        hasErr = true;
    }

    if (conPassword === "") {
        conPasswordErr.innerHTML = "Please confirm your password";
        hasErr = true;
    }
    else if (conPassword !== password) {
        conPasswordErr.innerHTML = "Confirm password does not match the password";
        hasErr = true;
    }

    if (securityQuestion === "") {
        securityQuestionErr.innerHTML = "Please select a security question";
        hasErr = true;
    }

    if (securityAnswer === "") {
        securityAnswerErr.innerHTML = "Security answer cannot be empty";
        hasErr = true;
    }

    if (hasErr) {
        return false;
    }
    else {
        return true;
    }
}
