const p = document.querySelector("#line");

function changeWidth() {
    let date = new Date();
    let day = date.getDay().toLocaleString(undefined,{minimumIntegerDigits: 2});
    let month = (date.getMonth() + 1).toLocaleString(undefined,{minimumIntegerDigits: 2});
    let year = date.getFullYear();
    let seconds = date.getSeconds().toLocaleString(undefined, {minimumIntegerDigits: 2})
    let time = `${date.getHours().toLocaleString(undefined,{minimumIntegerDigits: 2})}:${date.getMinutes().toLocaleString(undefined,{minimumIntegerDigits: 2})}:${date.getSeconds().toLocaleString(undefined,{minimumIntegerDigits: 2})}`;
    p.style.width = seconds*(100/59) + "vw";
    if(seconds == 0){
        p.style.transition = "0.25s linear";
    }
    else {
        p.style.transition = "1s linear";
    }

}
setInterval(changeWidth, 1)


