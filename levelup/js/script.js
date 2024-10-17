const body = document.querySelector('body'),
    sidebar = body.querySelector('.left-sidebar'),
    toggle = body.querySelector(".toggle"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");


toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close-sidebar");
})

// searchBtn.addEventListener("click", () => {
//     sidebar.classList.remove("close-sidebar");
// })

modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        modeText.innerText = "Light mode";
    } else {
        modeText.innerText = "Dark mode";
    }
});