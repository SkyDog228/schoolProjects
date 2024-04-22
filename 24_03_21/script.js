const aktualizuj = document.querySelectorAll(".aktualizuj");
const zamow = document.querySelectorAll(".zamow");
let kol = 0;

aktualizuj.forEach(el => el.addEventListener("click", () => {
    let nowa = prompt("Podaj nową wartość: ");
    el.parentElement.parentElement.querySelector(".ilosc").innerHTML = nowa;
    if(nowa < 3){
        el.parentElement.parentElement.querySelector(".ilosc").style.backgroundColor = "red";
    } else if(nowa < 6){
        el.parentElement.parentElement.querySelector(".ilosc").style.backgroundColor = "yellow";
    } else {
        el.parentElement.parentElement.querySelector(".ilosc").style.backgroundColor = "Honeydew";
    }

}))

aktualizuj_func();

function aktualizuj_func() {
    aktualizuj.forEach(el => {
    if(parseInt(el.parentElement.parentElement.querySelector(".ilosc").innerHTML) < 3){
        el.parentElement.parentElement.querySelector(".ilosc").style.backgroundColor = "red";
    } else if(parseInt(el.parentElement.parentElement.querySelector(".ilosc").innerHTML) < 6){
        el.parentElement.parentElement.querySelector(".ilosc").style.backgroundColor = "yellow";
    } else {
        el.parentElement.parentElement.querySelector(".ilosc").style.backgroundColor = "Honeydew";
    }
})
} 

zamow.forEach(el=> el.addEventListener("click", () => {
    let il = parseInt(el.parentElement.parentElement.querySelector(".ilosc").innerHTML);
    il++;
    el.parentElement.parentElement.querySelector(".ilosc").innerHTML = il;
    aktualizuj_func();
}))