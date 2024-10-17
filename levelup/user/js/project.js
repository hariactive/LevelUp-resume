const projectname = document.querySelector('#project-name'),
    projecttype = document.querySelector('#project-type'),
    projectyear = document.querySelector('.project-year'),
    projectmonth = document.querySelector('.project-month'),
    projectdesc = document.querySelector('textarea');

function projectverification() {
    if (projectname.value.length == 0) {
        projectname.style.border = "2px solid red";
        projectname.style.borderLeft = "12px solid red";
        projectname.focus();
        return false;
    }

    if (projecttype.value.length == 0) {
        projecttype.style.border = "2px solid red";
        projecttype.style.borderLeft = "12px solid red";
        projecttype.focus();
        return false;
    }

    if (projectyear.value == "0") {
        projectyear.style.border = "2px solid red";
        projectyear.style.borderLeft = "12px solid red";
        projectyear.focus();
        return false;
    }

    if (projectmonth.value == "0") {
        projectmonth.style.border = "2px solid red";
        projectmonth.style.borderLeft = "12px solid red";
        projectmonth.focus();
        return false;
    }

    if (projectdesc.value.length == 0) {
        projectdesc.style.border = "2px solid red";
        projectdesc.style.borderLeft = "12px solid red";
        projectdesc.focus();
        return false;
    }
}