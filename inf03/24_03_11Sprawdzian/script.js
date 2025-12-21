const f1 = document.getElementById("f1");
const f2 = document.getElementById("f2");
const f3 = document.getElementById("f3");
const foto_main = document.getElementById("foto_main");

f1.addEventListener("click", ()=>{
    foto_main.src = f1.src;
})
f2.addEventListener("click", ()=>{
    foto_main.src = f2.src;
})
f3.addEventListener("click", ()=>{
    foto_main.src = f3.src;
})

const gosci = document.getElementById("gosci");
const popr = document.getElementById("popr");
const koszt = document.getElementById("koszt");
const subm_gosc = document.getElementById("subm_gosc");

subm_gosc.addEventListener("click", ()=>{

    let sum = (parseInt(gosci.value)*100) + (parseInt(gosci.value)*100 * 0.3 * popr.checked);
    console.log(sum);
    koszt.innerHTML = `Koszt Twojego wesela to ${sum} zlotych`;
    
})

const Polak = document.getElementById("Polak");
const Nowak = document.getElementById("Nowak");
const Rysik = document.getElementById("Rysik");
const najn_sr = document.getElementById("najn_sr");
const subm_sr = document.getElementById("subm_sr");

subm_sr.addEventListener("click", ()=>{
    if(typeof(parseInt(Polak.value)) == 'string' || typeof(parseInt(Nowak.value)) == 'string' || typeof(parseInt(Rysik.value)) == 'string'){
        alert("Wpisz poprwne dane!")
    }
    console.log(typeof(Polak.value));
})