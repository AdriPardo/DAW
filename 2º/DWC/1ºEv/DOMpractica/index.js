"use strict";

function añadirCarrito(articulo) {
  let precio = articulo.lastElementChild.textContent.split(":")[1].substring(0, articulo.lastElementChild.firstChild.nodeValue.split(":")[1].length - 1);
  calculoTotales(precio, 3);
  let idImagen = "img" + articulo.id;
  crearProducto(document.getElementById(idImagen).getAttribute("src"), precio, "producto" + articulo.id);
}

function calculoTotales(precio, modificador) {
  let nuevoTotal;
  let total = + document.getElementById("totalCompra").firstChild.nodeValue.split(":")[1].substring(0, document.getElementById("totalCompra").firstChild.nodeValue.split(":")[1].length - 1);
  if (precio == 0) {
    nuevoTotal = document.createTextNode("Precio Total: " + precio + "€");
  }
  let borrar = document.getElementById("totalCompra").firstChild;
  document.getElementById("totalCompra").removeChild(borrar);
  if (modificador == 2) {
    nuevoTotal = document.createTextNode("Precio Total: " + precio + "€");
  } else if (modificador == 3) {
    nuevoTotal = document.createTextNode("Precio Total: " + (total + +precio) + "€");
  }
  document.getElementById("totalCompra").appendChild(nuevoTotal);
}

function vaciarCarrito() {
  calculoTotales(0, null);
  let carrito = document.getElementById("carrito");
  while (carrito.hasChildNodes()) {
    carrito.removeChild(carrito.lastChild);
  }
}

function crearProducto(src, precio, id) {
  let carrito = document.getElementById("carrito");
  if (!document.contains(document.getElementById(id))) {
    let contenedor = document.createElement("div")
    contenedor.id = id;
    contenedor.className = "l-carrito";
    let imagen = document.createElement("img");
    imagen.src = src;
    contenedor.appendChild(imagen);
    let precioIndividual = document.createElement("p");
    precioIndividual.id = "precioIndividual" + id;
    let precioTexto = document.createTextNode("Precio: " + precio + "€");
    precioIndividual.appendChild(precioTexto);
    contenedor.appendChild(precioIndividual);
    let unidades = document.createElement("p");
    unidades.id = "unidades" + id
    let unidadesTexto = document.createTextNode("Unidades: 1")
    unidades.appendChild(unidadesTexto);
    contenedor.appendChild(unidades);
    let precioTotal = document.createElement("p");
    precioTotal.id = "precioTotal" + id;
    let precioTotalTexto = document.createTextNode("Precio Total: " + precio + "€")
    precioTotal.appendChild(precioTotalTexto);
    contenedor.appendChild(precioTotal);
    let borrar = document.createElement("button");
    borrar.textContent = "Borrar";
    borrar.setAttribute("onclick", `borrarUnidad(${id})`);
    contenedor.appendChild(borrar);
    let borrarTodo = document.createElement("button");
    borrarTodo.textContent = "Borrar Todo";
    borrarTodo.setAttribute("onclick", `borrarTodo(${id})`);
    contenedor.appendChild(borrarTodo);
    carrito.appendChild(contenedor);
  } else {
    let unidades = document.getElementById("unidades" + id).textContent.split(":")[1].substring(0, document.getElementById("unidades" + id).textContent.split(":")[1].length);
    unidades++;
    document.getElementById("unidades" + id).textContent = "Unidades: " + unidades;
    let precioIndividual = document.getElementById("precioIndividual" + id).textContent.split(":")[1].substring(0, document.getElementById("precioIndividual" + id).textContent.split(":")[1].length - 1);
    precioIndividual *= unidades;
    document.getElementById("precioTotal" + id).textContent = "Precio Total: " + precioIndividual + "€";
  }
}

function borrarUnidad(producto) {
  let id = producto.id;
  let unidades = document.getElementById("unidades" + id).textContent.split(":")[1].substring(0, document.getElementById("unidades" + id).textContent.split(":")[1].length);
  unidades--;
  if (unidades != 0) {
    document.getElementById("unidades" + id).textContent = "Unidades: " + unidades;
    let precioIndividual = document.getElementById("precioIndividual" + id).textContent.split(":")[1].substring(0, document.getElementById("precioIndividual" + id).textContent.split(":")[1].length - 1);
    precioIndividual *= unidades;
    document.getElementById("precioTotal" + id).textContent = "Precio Total: " + precioIndividual + "€";
    let total = + document.getElementById("totalCompra").firstChild.nodeValue.split(":")[1].substring(0, document.getElementById("totalCompra").firstChild.nodeValue.split(":")[1].length - 1);
    calculoTotales(total - precioIndividual, 2);
  } else {
    borrarTodo(producto);
  }
}

function borrarTodo(producto) {
  let id = producto.id;
  let precioIndividual = document.getElementById("precioTotal" + id).textContent.split(":")[1].substring(0, document.getElementById("precioTotal" + id).textContent.split(":")[1].length - 1);
  let total = + document.getElementById("totalCompra").firstChild.nodeValue.split(":")[1].substring(0, document.getElementById("totalCompra").firstChild.nodeValue.split(":")[1].length - 1);
  calculoTotales(total - precioIndividual, 2);
  let carrito = document.getElementById("carrito");
  carrito.removeChild(document.getElementById(id));
}