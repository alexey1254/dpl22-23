
var urls = [];

//Meter valores en el array urls
function iniciarUrls() {
    for (let i = 1; i<= 20; i++) {
        if(i <= 9) {
            urls.push("http://alu7396.arkania.es/img/image0"+i+".jpg?e=imagemagick&");
        } else {
            urls.push("http://alu7396.arkania.es/img/image"+i+".jpg?e=imagemagick?&");
        }
    }
}
iniciarUrls();




// Coge los inputs y modifica el array urls
function inputIntoImgSrc() {
    let tamanio = document.getElementById("tamanio");
    let ancho = document.getElementById("borde");
    let color = document.getElementById("color");
    let enfoque = document.getElementById("enfoque");
    let desenfoque = document.getElementById("desenfoque");

    let obj = {
        tamanio: "dh=" + tamanio.value,
        anchoBorde: "&bw=" + ancho.value,
        altoBorde: "&bh=" +ancho.value,
        colorBorde: "&bc=" + color.value.replace(/#/g, ""),
        enfoque: "&sharpen=" + "2x5+0.5+" + enfoque.value,
        desenfoque: "&unsharp=" + "10x" + desenfoque.value,
    }

    for (let i = 0; i < urls.length; i++) {
        urls[i] += obj.tamanio + obj.anchoBorde + obj.colorBorde + obj.altoBorde + obj.enfoque + obj.desenfoque;
    }
}
function verImagenes() {
    let contenedor = document.getElementById("contenedor-img");
    setTimeout(() => {
        for(let i=0; i < urls.length; i++) {
            let img = document.createElement("img");
            img.setAttribute("src", urls[i]);
            img.setAttribute("class","image");
            contenedor.appendChild(img);
        }
    }, 3000);

}


function cambiarSrc(arrayUrls) {
    let images = document.getElementsByClassName("image");
    let imagesArray = Array.from(images);
    for (let i = 0; i < imagesArray.length; i++) {
        let attribute = imagesArray[i].getAttribute("src");
        attribute = urls[i];
        imagesArray[i].setAttribute("src", attribute);
    }

}


async function sendGET() {
    let container = document.getElementById("contenedor-img");
    container.hasChildNodes()
    
    inputIntoImgSrc();
    
    await cambiarSrc(urls);
    verImagenes();
    
}
