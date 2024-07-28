let container = document.querySelector("#container-left");
let content = document.querySelector("#content-left");

window.onscroll = () => {
    let scrollTop = window.scrollY;
    let viewportHeight = window.innerHeight;
    let sidebarTop = container.getBoundingClientRect().top + window.pageYOffset;
    let contentHeight = content.getBoundingClientRect().height;


    if (scrollTop >= contentHeight - viewportHeight + sidebarTop) {
        content.style.transform = `translateY(-${
            contentHeight - viewportHeight + sidebarTop + 160
        }px)`;
        content.style.position = "fixed";
    } else {
        content.style.transform = "";
        content.style.position = "";
    }
};
