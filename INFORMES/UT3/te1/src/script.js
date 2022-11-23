const link = "http://images.alu7396.arkania.es/img";

const getImagenes = () => {
    fetch('http://images.alu7396.arkania.es/img/image02.jpg?dw=200')
    .then((response) => response.json())
    .then((data) => console.log(data));
}
getImagenes();


function getInputs() {
    var tamanio = document.getElementById("tamanio");
    var ancho = document.getElementById("borde");
    var color = document.getElementById("color");
    var enfoque = document.getElementById("enfoque");
    var desenfoque = document.getElementById("desenfoque");

    return obj =
        {
            "tamanio":tamanio.value,
            "ancho":ancho.value,
            "color":color.value,
            "enfoque":enfoque.value,
            "desenfoque":desenfoque.value
        }
}





function verImagenes() {
    let inputs = getInputs();
    
}