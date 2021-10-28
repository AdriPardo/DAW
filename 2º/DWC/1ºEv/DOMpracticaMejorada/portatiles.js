'use strict'

let articulos = [
    {
        "codigo": "a1",
        "nombre": "HP",
        "preico": "350",
    },
    {
        "codigo": "a2",
        "nombre": "ASUS",
        "preico": "450",
    },
    {
        "codigo": "a3",
        "nombre": "HUAWEI",
        "preico": "750",
    },
    {
        "codigo": "a4",
        "nombre": "MSI",
        "preico": "1050",
    },
]


window.onload = function () {
    cargarCatalogo();
}

function cargarCatalogo() {
    articulos.forEach(n => {
        let codigo = n.codigo;
        let nombre = n.nombre;
        let precio = n.preico

        

    });

}