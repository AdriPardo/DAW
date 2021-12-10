'use strict'
let miCarrito;
let articulos = [
    {
        "id": "a1",
        "nombre": "HP",
        "precio": "350"
    },
    {
        "id": "a2",
        "nombre": "ASUS",
        "precio": "450"
    },
    {
        "id": "a3",
        "nombre": "HUAWEI",
        "precio": "750"
    },
    {
        "id": "a4",
        "nombre": "MSI",
        "precio": "1050"
    }
];

/* function traerDatos(articulos) {

    let xhr = new XMLHttpRequest();

    xhr.open('GET', 'localhost:3000/articulos');

    xhr.send();

    xhr.onload = function () {
        if (xhr.status != 200) {
            alert(`Error ${xhr.status}: ${xhr.statusText}`);
        } else {
            articulos = xhr.response;
        }
    };
} */

window.onload = function () {
    cargarCatalogo();
    miCarrito = new Carrito();
    //traerDatos(articulos);
}

class Articulo {

    constructor(id, nombre, precio) {
        this.id = id;
        this.nombre = nombre;
        this.precio = precio;
        this.unidades = 0;
    }



}
class Carrito {
    contadorId = 0;
    constructor() {
        this.id = this.contadorId++;
        this.fecha = new Date();
        this.articulos = [];

    }

    anyadeProducto(producto) {
        if (this.articulos.includes(producto)) {
            producto.unidades++;
        } else {
            this.articulos.push(producto);
            producto.unidades++;
        }

    }

    borrarProducto(producto) {

    }

    verCarrito() {
        console.log(this.articulos);
    }

    vaciarCarrito() {
        this.articulos = [];
    }

}


function cargarCatalogo() {
    articulos.forEach(producto => {
        let articuloNuevo = new Articulo(producto.id, producto.nombre, producto.precio);

        let catalogo = document.getElementById("catalogo");
        let contenedor = document.createElement("div")
        contenedor.id = "producto" + articuloNuevo.id;
        contenedor.className = "l-catalogo";
        let imagen = document.createElement("img");
        imagen.id = "img" + articuloNuevo.id;
        imagen.src = "./img/" + articuloNuevo.id + ".jpg";
        contenedor.appendChild(imagen);
        let precioIndividual = document.createElement("p");
        precioIndividual.id = "precioIndividual" + articuloNuevo.id;
        let precioTexto = document.createTextNode("Precio: " + producto.precio + "€");
        precioIndividual.appendChild(precioTexto);
        contenedor.appendChild(precioIndividual);
        let comprar = document.createElement("button");
        comprar.textContent = "Comprar";
        comprar.addEventListener("click", comprarArticulo);
        comprar.articulo = articuloNuevo;
        contenedor.appendChild(comprar);
        catalogo.appendChild(contenedor);
    });

    document.getElementById("ver").addEventListener("click", ver);
    document.getElementById("vaciar").addEventListener("click", vaciar);
}

function comprarArticulo(event) {
    miCarrito.anyadeProducto(event.currentTarget.articulo);

}
function ver() {
    miCarrito.verCarrito();
}

function vaciar() {
    miCarrito.vaciarCarrito();
}