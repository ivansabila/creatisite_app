// let title = document.querySelector("#titleIn");
// let desc = document.querySelector("#descIn");
// let body = document.querySelector("#body");
// let titleInput = document.querySelector("#title");
// let descInput = document.querySelector("#description");
// let bodyInput = document.querySelector("#bodyInput");

function validateTitle() {
    if (title.innerHTML.toLowerCase() === "title") {
        // pertama kali di klik
        title.innerHTML = "";
        title.autofocus;
        title.classList.remove("text-blackSec/50");
        title.classList.add("text-black");
    }
}

function validateTitleBlur() {
    if (title.innerHTML.toLowerCase() === "") {
        title.innerHTML = "Title";
        title.classList.remove("text-black");
        title.classList.add("text-blackSec/50");
    }
}

function validateDesc() {
    if (desc.innerHTML.toLowerCase() === "description") {
        // pertama kali di klik
        desc.innerHTML = "";
        desc.autofocus;
        desc.classList.remove("text-blackSec/50");
        desc.classList.add("text-blackSec");
    }
}

function validateDescBlur() {
    if (desc.innerHTML.toLowerCase() === "") {
        desc.innerHTML = "Description";
        desc.classList.remove("text-black");
        desc.classList.add("text-blackSec/50");
    }
}

function validateBody() {
    if (body.innerHTML.toLowerCase() === "write your blog here") {
        // pertama kali di klik
        body.innerHTML = "";
        body.autofocus;
        body.classList.remove("text-blackSec/50");
        body.classList.add("text-blackSec");
    }
}

function validateBodyBlur() {
    if (body.innerHTML.toLowerCase() === "") {
        body.innerHTML = "Write your blog here";
        body.classList.remove("text-black");
        body.classList.add("text-blackSec/50");
    }
}

function testTitle(w) {
    titleInput.value = w.innerText;
}

function testDesc(w) {
    descInput.value = w.innerText;
}

function testBody(w) {
    bodyInput.value = w.innerText;
}

function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");
    console.log(`${image}`);
    console.log(`${imgPreview}`);
    imgPreview.style.display = "block";

    const OFReader = new FileReader();
    OFReader.readAsDataURL(image.files[0]);

    OFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}

// $(document).ready(function () {
//     $("#summernote").summernote({
//         height: 300, // set editor height
//         minHeight: null, // set minimum height of editor
//         maxHeight: null, // set maximum height of editor
//         focus: true, // set focus to editable area after initializing summernote
//         toolbar: [
//             // [groupName, [list of button]]
//             ['style', ['style']],
//             ['font', ['bold', 'underline', 'clear']],
//             ['fontname', ['fontname']],
//             ['color', ['color']],
//             ['para', ['ul', 'ol', 'paragraph']],
//             ['table', ['table']],
//             ["view", ["fullscreen", "codeview", "help"]],
//         ],
//     });
// });

function formatText(command, value = null) {
    document.execCommand(command, false, value);
}

function toggleView() {
    const editor = document.getElementById("editor");
    const codeView = document.getElementById("body");
    const isCodeView = codeView.style.display === "block";

    if (isCodeView) {
        // Beralih ke tampilan WYSIWYG
        editor.innerHTML = codeView.value;
        editor.style.display = "block";
        codeView.style.display = "none";
    } else {
        // Beralih ke tampilan kode
        codeView.value = editor.innerHTML;
        editor.style.display = "none";
        codeView.style.display = "block";
    }
}

document.addEventListener("DOMContentLoaded", (event) => {
    const toolbarButtons = document.querySelectorAll(".toolbar button");
    toolbarButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const command = button.getAttribute("data-command");
            formatText(command);
        });
    });
});

function submitForm() {
    const editorContent = document.getElementById("editor").innerHTML;
    document.getElementById("body").value = editorContent;
}

let descInput = document.querySelector("#description");
descInput.addEventListener("keyup", (e) => {
    console.log("innn");
    descInput.style.height = "auto";
    console.log(descInput.style.height);
    let scHeight = e.target.scrollHeight;
    descInput.style.height = `${scHeight}px`;
});

let titleInput = document.querySelector("#title");
titleInput.addEventListener("keyup", (e) => {
    console.log("innn");
    titleInput.style.height = "auto";
    console.log(titleInput.style.height);
    let scHeight = e.target.scrollHeight;
    titleInput.style.height = `${scHeight}px`;
});
