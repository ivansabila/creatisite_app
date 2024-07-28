let flash = document.querySelector("#flash");
let countdown = document.querySelector("#countdown");

let timeLeft = 5;

if (flash !== null) {
    const toHide = setInterval(() => {
        if (timeLeft <= 0) {
            clearInterval(toHide);
            flash.remove();
            console.log("finish");
        } else {
            countdown.innerHTML = timeLeft;
        }
        timeLeft -= 1;
    }, 1000);
}
