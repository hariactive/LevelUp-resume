const userName = document.querySelector('#username'),
    fullName = document.querySelector('#fullname'),
    countryname = document.querySelector('#select-skill'),
    phoneNo = document.querySelector('#phone'),
    emailAdd = document.querySelector('#email'),
    location1 = document.querySelector('#location'),
    introduction = document.querySelector('textarea'),
    button = document.querySelector('#submitbutton');

function edit_pesunal_details() {
    userName.removeAttribute("disabled");
    fullName.removeAttribute("disabled");
    countryname.removeAttribute("disabled");
    phoneNo.removeAttribute("disabled");
    emailAdd.removeAttribute("disabled");
    location1.removeAttribute("disabled");
    introduction.removeAttribute("disabled");
    button.removeAttribute("disabled");
}

userName.addEventListener('input', validateusename);
fullName.addEventListener('input', validatefullname);
countryname.addEventListener('input', validatecountryname);
phoneNo.addEventListener('input', validatephone);
emailAdd.addEventListener('input', validateemail);
location1.addEventListener('input', validatelocation);
introduction.addEventListener('input', validateintro);

function validateusename(e) {
    if (e.target.value.length >= 4 || e.target.value.length == 0) {
        userName.style.border = "1px solid silver";
        userName.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        userName.style.border = "2px solid red";
        userName.style.borderLeft = "12px solid red";
    }
}

function validatefullname(e) {
    if (e.target.value.length >= 4 || e.target.value.length == 0) {
        fullName.style.border = "1px solid silver";
        fullName.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        fullName.style.border = "2px solid red";
        fullName.style.borderLeft = "12px solid red";
    }
}

function validatecountryname(e) {
    if (e.target.value != "0") {
        countryname.style.border = "1px solid silver";
        countryname.style.borderLeft = "12px solid rgb(82, 227, 220)";
    }
}

function validatephone(e) {
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if ((e.target.value.length == 0 || e.target.value.length == 10) && e.target.value.match(phoneno)) {
        phoneNo.style.border = "1px solid silver";
        phoneNo.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        phoneNo.style.border = "2px solid red";
        phoneNo.style.borderLeft = "12px solid red";
    }
}

function validateemail(e) {
    var emailrowstring2 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (e.target.value.match(emailrowstring2)) {
        emailAdd.style.border = "1px solid silver";
        emailAdd.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        emailAdd.style.border = "2px solid red";
        emailAdd.style.borderLeft = "12px solid red";
    }
}

function validatelocation(e) {
    if (e.target.value.length >= 5 || e.target.value.length == 0) {
        location1.style.border = "1px solid silver";
        location1.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        location1.style.border = "2px solid red";
        location1.style.borderLeft = "12px solid red";
    }
}

function validateintro(e) {
    if (e.target.value.length >= 50 || e.target.value.length == 0) {
        introduction.style.border = "1px solid silver";
        introduction.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        introduction.style.border = "2px solid red";
        introduction.style.borderLeft = "12px solid red";
    }
}

function persunal_detail_validation() {
    if (userName.value.length < 3) {
        alert("Your username must be grater than 4 caracters.");
        userName.style.border = "2px solid red";
        userName.style.borderLeft = "12px solid red";
        userName.focus();
        return false;
    }

    if (fullName.value.length < 3) {
        alert("Your full name must be grater than 4 caracters.");
        fullName.style.border = "2px solid red";
        fullName.style.borderLeft = "12px solid red";
        fullName.focus();
        return false;
    }

    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (phoneNo.value.length != 10 && !phoneNo.value.match(phoneno)) {
        alert("Your Mobile number is not correct.");
        phoneNo.style.border = "2px solid red";
        phoneNo.style.borderLeft = "12px solid red";
        phoneNo.focus();
        return false;
    }

    var emailrowstring2 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!emailAdd.value.match(emailrowstring2)) {
        alert("Your email is not correct.");
        emailAdd.style.border = "2px solid red";
        emailAdd.style.borderLeft = "12px solid red";
        emailAdd.focus();
        return false;
    }

    if (location1.value.length < 4) {
        alert("Please your location.");
        location1.style.border = "2px solid red";
        location1.style.borderLeft = "12px solid red";
        location1.focus();
        return false;
    }

    // var optionSelIndex = countryname.options[countryname.selectedIndex].value;
    if (countryname.value == "0") {
        alert("Please select your country.");
        countryname.style.border = "2px solid red";
        countryname.style.borderLeft = "12px solid red";
        countryname.focus();
        return false;
    }

    if (introduction.value.length < 49) {
        alert("Your introduction must be grater the 50 characters.");
        introduction.style.border = "2px solid red";
        introduction.style.borderLeft = "12px solid red";
        introduction.focus();
        return false;
    }
}

