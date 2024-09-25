const pass = document.getElementById("pass")
const icon = document.querySelector(".ojito");

icon.addEventListener("click", e => {
    if (pass.type === "password") {
        pass.type = "text";
        icon.classList.remove('ojito-remove')
        icon.classList.add('ojitoo')
    } else {
        pass.type = "password";
        icon.classList.add('ojito-remove')
        icon.classList.remove('ojitoo')
    }
})