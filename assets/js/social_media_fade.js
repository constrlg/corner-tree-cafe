const social_media = document.querySelector("#social_media");

window.addEventListener('scroll', checkHeight)

function checkHeight(){
    if(window.scrollY > 500) {
        social_media.classList.add("social_media_fade")
    }
     else {
         social_media.classList.remove("social_media_fade")
     }
}