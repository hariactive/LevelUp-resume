const certificateName = document.querySelector('#certificate-name'),
    issueyear = document.querySelector('.certificate-issue-year'),
    issueMonth = document.querySelector('.certificate-issue-month');

function certificateverification() {
    if (certificateName.value.length == 0) {
        certificateName.style.border = "2px solid red";
        certificateName.style.borderLeft = "12px solid red";
        certificateName.focus();
        return false;
    }

    if (issueyear.value == "0") {
        issueyear.style.border = "2px solid red";
        issueyear.style.borderLeft = "12px solid red";
        issueyear.focus();
        return false;
    }

    if (issueMonth.value == "0") {
        issueMonth.style.border = "2px solid red";
        issueMonth.style.borderLeft = "12px solid red";
        issueMonth.focus();
        return false;
    }
}