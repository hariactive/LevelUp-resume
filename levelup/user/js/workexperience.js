const companyName = body.querySelector('#company-name'),
    jobTitle = body.querySelector('#job-title'),
    empType = body.querySelector('.employment-type'),
    jobLocation = body.querySelector('#job-location'),
    startDateYear = body.querySelector('.start-date-year'),
    startDateMonth = body.querySelector('.start-date-month'),
    checkbox1 = body.querySelector('.currentworking'),
    endDateYear = body.querySelector('.end-date-year'),
    endDateMonth = body.querySelector('.end-date-month'),
    endDate = body.querySelector('.end-date');

checkbox1.addEventListener('change', function () {
    if (this.checked) {
        endDate.style.display = "none";
    } else {
        endDate.style.display = "block";
    }
});

function workExperiencevalidation() {
    if (companyName.value.length == 0) {
        companyName.style.border = "2px solid red";
        companyName.style.borderLeft = "12px solid red !important";
        companyName.focus();
        return false;
    }

    if (jobTitle.value.length == 0) {
        jobTitle.style.border = "2px solid red";
        jobTitle.style.borderLeft = "12px solid red !important";
        jobTitle.focus();
        return false;
    }

    if (empType.value == "0") {
        empType.style.border = "2px solid red";
        empType.style.borderLeft = "12px solid red !important";
        empType.focus();
        return false;
    }

    if (jobLocation.value.length == 0) {
        jobLocation.style.border = "2px solid red";
        jobLocation.style.borderLeft = "12px solid red !important";
        jobLocation.focus();
        return false;
    }

    if (startDateYear.value == "0") {
        startDateYear.style.border = "2px solid red";
        startDateYear.style.borderLeft = "12px solid red !important";
        startDateYear.focus();
        return false;
    }

    if (startDateMonth.value == "0") {
        startDateMonth.style.border = "2px solid red";
        startDateMonth.style.borderLeft = "12px solid red !important";
        startDateMonth.focus();
        return false;
    }

    // if (disc.value.length < 150) {
    //     alert("Description must be more the 150 character.")
    //     disc.style.border = "2px solid red";
    //     disc.style.borderLeft = "12px solid red !important";
    //     disc.focus();
    //     return false;
    // }
}