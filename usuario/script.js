let botonCerrarSesion = document.querySelector("#boton-cerrar-sesion");
let caja = document.querySelector(".caja");
let cruz = document.querySelector("#cruz");
let confirmacion = document.querySelector("#confirmacion");

botonCerrarSesion.addEventListener("click", ()=>{
    caja.classList.add("on");


});

cruz.addEventListener("click", ()=>{
    caja.classList.remove("on");
});

confirmacion.addEventListener("click", ()=>{

});