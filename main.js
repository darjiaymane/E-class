function validate(e) {
    let fname = document.forms['signup']['fname'].value;
    let lname = document.forms['signup']['lname'].value;
    let username = document.forms['signup']['username'].value;
    let email = document.forms['signup']['email'].value;
    let password = document.forms['signup']['password'].value;

    let fnameError = document.getElementById('fnameError');
    let lnameError = document.getElementById('lnameError');
    let usernameError = document.getElementById('usernameError');
    let emailError = document.getElementById('emailError');
    let passError = document.getElementById('passError');


    let flnameRegex =  /^[a-zA-Z]/;
    let emailRegex = /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;
    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

    if (fname == ""){
        fnameError.innerText = "Please enter your First Name";
        e.preventDefault();
    }
    else if (!flnameRegex.test(fname) ){
        fnameError.innerText = "Non valide";
        e.preventDefault();
    }

    if (lname == ""){
        lnameError.innerText = "Please enter your Last Name";
        e.preventDefault();
    }
    else if (!flnameRegex.test(lname) ){
        lnameError.innerText = "Non valide";
        e.preventDefault();
    }

    if (username == ""){
        usernameError.innerText = "Please enter your Username";
        e.preventDefault();
    }

    if (email == ""){
        emailError.innerText = "Please enter your email";
        e.preventDefault();
    }
    else if (!emailRegex.test(email) ){
        emailError.innerText = "Invalide email";
        e.preventDefault();
    }


    if (password == ""){
        passError.innerText = "Please enter your password";
        e.preventDefault();
    }
    else if (!passwordRegex.test(password) ){
        passwordError.innerText = "invalide password";
        e.preventDefault();
    }

}