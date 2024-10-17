const loginusername = document.querySelector('#username2'),
    loginpassword = document.querySelector('#password1');

loginusername.addEventListener('input', checkloginusername);
loginpassword.addEventListener('input', checkloginpassword);

function checkloginusername(e) {
    if (e.target.value.length >= 6 || e.target.value.length == 0) {
        loginusername.style.border = "1px solid silver";
        loginusername.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        loginusername.style.border = "2px solid red";
        loginusername.style.borderLeft = "12px solid red";
    }
}

function checkloginpassword(e) {
    if (e.target.value.length >= 8 || e.target.value.length == 0) {
        loginpassword.style.border = "1px solid silver";
        loginpassword.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        loginpassword.style.border = "2px solid red";
        loginpassword.style.borderLeft = "12px solid red";
    }
}

function loginvalidationafterclick() {
    if (loginusername.value.length <= 5) {
        loginusername.style.border = "2px solid red";
        loginusername.style.borderLeft = "12px solid red";
        loginusername.focus();
        return false;
    }

    if (loginpassword.value.length < 7) {
        loginpassword.style.border = "2px solid red";
        loginpassword.style.borderLeft = "12px solid red";
        loginpassword.focus();
        return false;
    }
}