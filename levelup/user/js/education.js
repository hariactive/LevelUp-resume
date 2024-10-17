const collegename = document.querySelector('#collegename'),
    degreetype = document.querySelector('.degreetype'),
    degreename = document.querySelector('#degree-name'),
    startyear = document.querySelector('.start-education-year'),
    startmonth = document.querySelector('.start-education-month'),
    endyear = document.querySelector('.end-education-year'),
    endmonth = document.querySelector('.end-education-month'),
    percentage = document.querySelector('#percentage');

function educationvarification() {
    if (collegename.value.length == 0) {
        collegename.style.border = "2px solid red";
        collegename.style.borderLeft = "12px solid red";
        collegename.focus();
        return false;
    }

    if (degreetype.value == "0") {
        degreetype.style.border = "2px solid red";
        degreetype.style.borderLeft = "12px solid red";
        degreetype.focus();
        return false;
    }

    if (degreename.value.length == 0) {
        degreename.style.border = "2px solid red";
        degreename.style.borderLeft = "12px solid red";
        degreename.focus();
        return false;
    }

    if (startyear.value == "0") {
        startyear.style.border = "2px solid red";
        startyear.style.borderLeft = "12px solid red";
        startyear.focus();
        return false;
    }

    if (startmonth.value == "0") {
        startmonth.style.border = "2px solid red";
        startmonth.style.borderLeft = "12px solid red";
        startmonth.focus();
        return false;
    }

    if (endyear.value == "0") {
        endyear.style.border = "2px solid red";
        endyear.style.borderLeft = "12px solid red";
        endyear.focus();
        return false;
    }

    if (endmonth.value == "0") {
        endmonth.style.border = "2px solid red";
        endmonth.style.borderLeft = "12px solid red";
        endmonth.focus();
        return false;
    }

    if (percentage.value < 1 || percentage.value > 100 || percentage.value.length == 0) {
        percentage.style.border = "2px solid red";
        percentage.style.borderLeft = "12px solid red";
        percentage.focus();
        return false;
    }
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}