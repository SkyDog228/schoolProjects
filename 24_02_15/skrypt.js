
const temp = document.getElementById("temp").value;
const K = document.getElementById("kelwiny");
const F = document.getElementById("Fahrenheity");
console.log(temp, K, F);
if(true){
    
    K.addEventListener("click", ()=>{
        const temp = document.getElementById("temp").value;
        const oK = temp*1 + 273.15;
        console.log(oK);
        K.innerHTML = oK+"K";
    })
    F.addEventListener("click", ()=>{
        const temp = document.getElementById("temp").value;
        const oF = temp*1.8 + 32;
        console.log(oF);
        F.innerHTML = oF+"F";
    })
}