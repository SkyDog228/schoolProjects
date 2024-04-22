const names = document.getElementById("imie");
const nazw = document.getElementById("nazw");
const email = document.getElementById("email");
const opcje = document.getElementById("opcje");
const submit = document.getElementById("submit");
const napis = document.getElementById("napis");

console.log(names, nazw, email, opcje);
submit.addEventListener("click", ()=>{
    if(names.value == '' || nazw.value == '' || email.value == ''){
        napis.innerHTML = "Blad";
        return 0;
    }
    let normEmail = email.value.toLowerCase();
    if(normEmail != email.value){
        napis.innerHTML = "Blad w email";
        return 0;
    }
    napis.innerHTML = `${names.value} ${nazw.value} <br>
        ${normEmail} <br>
        Usluga: ${opcje.value}`;
})