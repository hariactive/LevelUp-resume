const skillsfield = document.querySelector('#skills'),
    skillslevel = document.querySelector('#select-skill');

skillsfield.addEventListener('input', skillsfield_check);

function skillsfield_check(e) {
    if (e.target.value.length == 0 || e.target.value.length > 1) {
        skillsfield.style.border = "1px solid silver";
        skillsfield.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        skillsfield.style.border = "2px solid red";
        skillsfield.style.borderLeft = "12px solid red";
    }
}

function skills_detail_validation() {
    if (skillsfield.value.length == 0) {
        skillsfield.style.border = "2px solid red";
        skillsfield.style.borderLeft = "12px solid red";
        skillsfield.focus();
        return false;
    }

    if (skillslevel.value == "0") {
        alert("Please select skill level.");
        skillslevel.style.border = "2px solid red";
        skillslevel.style.borderLeft = "12px solid red";
        skillslevel.focus();
        return false;
    }
}