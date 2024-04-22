const l1 = document.getElementById("l1");
const l2 = document.getElementById("l2");
const sum = document.getElementById("plus");
const minus = document.getElementById("minus");
const potega = document.getElementById("potega");
const wynik = document.getElementById("wynik");

const run = document.getElementById("mied");



sum.addEventListener("click", () => {
    wynik.innerText = `${Number(l1) + Number(l2)}`;
})

minus.addEventListener("click", () => {
    wynik.innerText = `${l1 - l2}`;
})

potega.addEventListener("click", () => {
    wynik.innerText = `${l1 ** l2}`;
})

run.addEventListener("click", () => {
    wynik.innerHTML = "";
    let n1 = parseInt(l1.value);
    let n2 = parseInt(l2.value);
    if(isNaN(n1) || isNaN(n2)){
        wynik.innerHTML = "BLAD!";
        return ;
    }
    let direction = ((n1 < n2) ? 1 : -1);
    for(let i = n1; i != (n2 + direction); i += direction){
        wynik.innerHTML += `${i} `;
    }
})