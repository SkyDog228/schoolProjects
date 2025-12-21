const r = document.getElementById("r");
const g = document.getElementById("g");
const b = document.getElementById("b");
const p = document.getElementById("p");

r.addEventListener("click", () => {
    p.style.color = "red";
})

g.addEventListener("click", () => {
    p.style.color = "green";
})

b.addEventListener("click", () => {
    p.style.color = "blue";
})



const napis = document.getElementById("napis");
const size = document.getElementById("size");
const rodzaj = document.getElementById("rodzaj");
const ramka = document.getElementById("ramka");

let border = 0;
ramka.addEventListener("change", () => {
    if(ramka.checked) napis.style.border = "1px solid black";
    else napis.style.border = "None";
})

size.addEventListener("blur", () => {
    napis.style.fontSize = size.value + "px";
})

rodzaj.addEventListener("change", () => {
    napis.style.fontFamily = rodzaj.value;
})