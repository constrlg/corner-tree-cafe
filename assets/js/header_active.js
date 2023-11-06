const header = document.querySelector("header");

window.onscroll = function() {
    var header_top = window.scrollY;
    if(header_top >= 50) {
        header.classList.add("header_active")
    } 
    else 
    {
        header.classList.remove("header_active")
    }
}

