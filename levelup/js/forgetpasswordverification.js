const forgetemail = document.querySelector('#forget-email');

forgetemail.addEventListener('input', checkforgetemail);

function checkforgetemail(e) {
    var emailrowstring2 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (e.target.value.match(emailrowstring2)) {
        forgetemail.style.border = "1px solid silver";
        forgetemail.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        forgetemail.style.border = "2px solid red";
        forgetemail.style.borderLeft = "12px solid red";
    }
}

function forgetemailchecker() {
    var emailrowstring2 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!forgetemail.value.match(emailrowstring2)) {
        alert("Your email is not correct.");
        forgetemail.style.border = "2px solid red";
        forgetemail.style.borderLeft = "12px solid red";
        forgetemail.focus();
        return false;
    }
}