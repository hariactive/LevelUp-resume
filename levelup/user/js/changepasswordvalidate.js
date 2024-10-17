const currentpass = document.querySelector('#currentpass'),
    newpassword = document.querySelector('#newpass'),
    confirmpass = document.querySelector('#confirmpass');

currentpass.addEventListener('input', validatecurrentpass);
newpassword.addEventListener('input', validatenewpass);
confirmpass.addEventListener('input', validateconfirmnewpass);

function validatecurrentpass(e) {
    if (e.target.value.length >= 8 || e.target.value.length == 0) {
        currentpass.style.border = "1px solid silver";
        currentpass.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        currentpass.style.border = "2px solid red";
        currentpass.style.borderLeft = "12px solid red";
    }
}

function validatenewpass(e) {
    if (e.target.value.length >= 8 || e.target.value.length == 0) {
        newpassword.style.border = "1px solid silver";
        newpassword.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        newpassword.style.border = "2px solid red";
        newpassword.style.borderLeft = "12px solid red";
    }
}

function validateconfirmnewpass(e) {
    if (e.target.value.length >= 8 || e.target.value.length == 0) {
        confirmpass.style.border = "1px solid silver";
        confirmpass.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        confirmpass.style.border = "2px solid red";
        confirmpass.style.borderLeft = "12px solid red";
    }
}

function changepasswordpagevalidation() {
    if (currentpass.value.length < 7 || currentpass.value.length == 0) {
        alert("Your current password must be grater than 8 caracters.");
        currentpass.style.border = "2px solid red";
        currentpass.style.borderLeft = "12px solid red";
        currentpass.focus();
        return false;
    }

    if (newpassword.value.length < 7 || newpassword.value.length == 0) {
        alert("Your new password must be grater than 8 caracters.");
        newpassword.style.border = "2px solid red";
        newpassword.style.borderLeft = "12px solid red";
        newpassword.focus();
        return false;
    }

    if (confirmpass.value.length < 7 || confirmpass.value.length == 0) {
        alert("Your confirm password must be grater than 8 caracters.");
        confirmpass.style.border = "2px solid red";
        confirmpass.style.borderLeft = "12px solid red";
        confirmpass.focus();
        return false;
    }

    if (newpassword.value != confirmpass.value) {
        alert("Your new password and confirm password must be same.");
        newpassword.style.border = "2px solid red";
        newpassword.style.borderLeft = "12px solid red";
        confirmpass.style.border = "2px solid red";
        confirmpass.style.borderLeft = "12px solid red";
        newpassword.focus();
        return false;
    }
}