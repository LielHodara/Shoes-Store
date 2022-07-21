const password = '123';

function login() {
    var usernameInput = document.getElementById('usernameId').value;
    var passwordInput = document.getElementById('passwordId').value ;
    // check if the inputs are valid, if not valid stop without printing result.
    if (validateInput(usernameInput, passwordInput)) {
        alert(`Hello ${usernameInput} happy to see u back`)
        window.location.href = "home.html";
    } else {
        alert("Name or Password incorrect");
    }
}

function validateInput(usernameValue, passwordValue) {
    const users = ["Efi",  "Hadas", "liel","admin","user"];
    var isUserValid = false;
    for (i = 0; i < users.length; i++) {
        if (usernameValue == users[i] && passwordValue == password) {
            isUserValid = true;
        }
    }
    return isUserValid;
}