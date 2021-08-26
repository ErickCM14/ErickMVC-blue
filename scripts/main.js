/*animar facil*/
/*https://www.youtube.com/watch?v=Li0RuxT9f54*/

/*Como Hacer un Menú Dinámico con Flexbox y Responsive Design*/
console.log("djdjdjdj");

const menuBar = document.querySelector(".bt-menu");
console.log(menuBar);
const nav = document.querySelector(".nav-menu");
// const toggle = document.querySelector(".nav-menu-toggle")

menuBar.addEventListener("click", () => {

    // toogle.setAttribute("style", "display:flex; flex-direction:column");
    nav.classList.toggle("nav-menu-toggle");
    
});