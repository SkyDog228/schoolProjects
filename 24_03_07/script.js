const ksztalt = document.getElementById("ksz");
const r = document.getElementById("r");
const g = document.getElementById("g");
const b = document.getElementById("b");
const btn = document.getElementById("btn");
const zam = document.getElementById("zam");
const names = ["miś", "żabka", "serce"];
const foto = document.getElementById("foto");
const imgs = ["mis", "frog", "heart"];
const ramka = document.getElementsByName("r");

btn.addEventListener("click", ()=>{
    let ks = names[ksztalt.value - 1] == undefined ? "inny ksztalt" : names[ksztalt.value - 1];
    let img = imgs[ksztalt.value - 1] == undefined ? "inne" : imgs[ksztalt.value - 1];
    let rC = r.value < 0 || r.value > 255 ? 0 : r.value;
    let gC = g.value < 0 || g.value > 255 ? 0 : g.value;
    let bC = b.value < 0 || b.value > 255 ? 0 : b.value;
    zam.innerHTML = ks;
    zam.style.backgroundColor = `rgb(${rC}, ${gC}, ${bC})`;

    ramka.forEach(element => {
        if(element.id == "ramkatak" && element.checked){
            foto.style.border = "2px solid black";
        }
        if(element.id == "ramkanie" && element.checked){
            foto.style.border = "none";
            }
    });
    

    foto.src = `./img/${img}.jpg`;
    foto.alt = img;
    foto.style.display = "block";
})