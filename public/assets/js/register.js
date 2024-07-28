function isChecked() {
    let check = document.querySelector("#policy");
    let button = document.querySelector("#cta");

    if (check.checked === false) {
        button.disabled = true;
        console.log("tidak bisa");
    } else {
        button.disabled = false;
        console.log("bisa");
    }
}
