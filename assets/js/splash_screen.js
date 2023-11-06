const splash_screen = document.querySelector('.splash_screen');

document.addEventListener('DOMContentLoaded', (e) => {
    setTimeout(()=> {
        splash_screen.classList.add('display_none');
    }, 2000)
})