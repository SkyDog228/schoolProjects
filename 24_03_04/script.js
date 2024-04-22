const obrazgora=document.getElementById("obrazgora")
const obraz1=document.getElementById("obraz1")
const obraz2=document.getElementById("obraz2")
const obraz3=document.getElementById("obraz3")

let licz = 0;

obraz1.addEventListener("click", ()=>{
    obrazgora.src= "./img/крутая ава 3.jpg"
    licz = 0;
})
obraz2.addEventListener("click", ()=>{
    obrazgora.src= "./img/WYJSYtKGuzM.jpg"
    licz = 1;
})
obraz3.addEventListener("click", ()=>{
    obrazgora.src= "./img/nigga.jpg"
    licz = 2;
})

const prev = document.getElementById("prev");
const next = document.getElementById("next");

const nazwy=["./img/крутая ава 3.jpg","./img/WYJSYtKGuzM.jpg","./img/nigga.jpg"]



prev.addEventListener("click", ()=>{
    licz--;
    if(licz < 0){
        licz = nazwy.length - 1;
    }
    obrazgora.src=nazwy[licz];
    console.log(licz);
})

next.addEventListener("click", ()=>{
    licz++;
    if(licz > nazwy.length - 1){
        licz = 0;
    }
    obrazgora.src=nazwy[licz];
    console.log(licz);
    
})
