// Cuadrados de los productos del cuadro izquierdo
var append = document.getElementById('tomar');
// Lista inferior en la que se acumulan los productos
const lista = document.querySelector('.lista');

// Agregar elemento a al .seleccion de abajo
function añadir(){
    lista.innerHTML += '<p class=parte  ><img src=img/x.png class=icon>' + append.innerText + '</p>';
};

// Evento que percibe cuando el usuario selecciona algo
const nombre = (evt) => {
    añadir();
    console.log(append.innerText);
};

append.addEventListener("mousedown", nombre);

/* Quitar los elementos seleccionados
const icon = document.getElementById('icono');

function borrar(){
    texto.innerHTML = '';
};

icon.addEventListener("mousedown", (evt) => {
    borrar();
});
*/  