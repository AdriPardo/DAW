window.onload = function () {
    getCategorias().then(result => result.forEach(e => {
        menu = document.getElementById('menu');
        boton = document.createElement('button');
        boton.id = e.id;
        boton.textContent = e.nombre;
        boton.setAttribute("onclick", `pintarArticulos(${e.id})`);
        menu.appendChild(boton);
        espacio = document.createElement('br');
        menu.appendChild(espacio);
    }))
}

let getCategorias = () => {
    // Return a new promise.
    return new Promise(function (resolve, reject) {

        var req = new XMLHttpRequest();
        req.open('GET', 'http://localhost:3000/categorias');

        req.onload = function () {
            if (req.status == 200) {

                resolve(JSON.parse(req.response)); // Resolve the promise with the response text
            }
            else {
                reject(Error(req.statusText)); // HTTP Error reject with statusText
            }
        };
        // Handle network errors
        req.onerror = function () {
            reject(Error("Network Error"));
        };
        req.send(); // Make the request
    });
}

function pintarArticulos(boton) {
    id = boton.id;
    getArticulosCategoria(id).then(result => result.forEach(a => {
        panel = document.getElementById('panelArticulos');
        if (panel.contains(document.getElementById('div'))) {
            panel.removeChild(document.getElementById('div'));
        } else {
            articulo = document.createElement('div');
            articulo.id = "div";
            nombre = document.createElement('h3');
            texto = document.createTextNode(a.nombre)
            nombre.appendChild(texto);
            articulo.appendChild(nombre);
            precio = document.createElement('p');
            texto = document.createTextNode(a.precio + "€")
            precio.appendChild(texto);
            articulo.appendChild(precio);
            panel.appendChild(articulo);
        }

    }));



}


let getArticulosCategoria = (id) => {
    // Return a new promise.
    return new Promise(function (resolve, reject) {

        var req = new XMLHttpRequest();
        req.open('GET', 'http://localhost:3000/articulos?id_categoria=' + id);

        req.onload = function () {
            if (req.status == 200) {
                resolve(JSON.parse(req.response)); // Resolve the promise with the response text
            }
            else {
                reject(Error(req.statusText)); // HTTP Error reject with statusText
            }
        };
        // Handle network errors
        req.onerror = function () {
            reject(Error("Network Error"));
        };
        req.send(); // Make the request
    });
}