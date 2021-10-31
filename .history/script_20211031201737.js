const btn = document.querySelector(".nav-toggle");
const links = document.querySelector(".toogle__items");

if (links.classList.contains("active")) {
    links.classList.remove("active");
}

btn.addEventListener("click", () => {
    links.classList.toggle("active");
    if (btn.classList.contains("active")) {
        btn.classList.remove("active");
    } else {
        btn.classList.toggle("active");
    }
});