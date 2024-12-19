let boton = document.querySelector("button");

boton.addEventListener("click", ()=>{
    //location.href = "casaelegida.html";
    let nodo = boton.parentNode;
    let texto = nodo.childNodes[3];
    console.log(texto.textContent)
});