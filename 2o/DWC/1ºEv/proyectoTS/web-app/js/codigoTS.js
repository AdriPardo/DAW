"use strict";
function getMessage() {
    return "Hola...";
}
class Alumno {
    constructor(nombre) {
        this.nombre = nombre;
    }
    saludo() {
        alert("Hola" + this.nombre);
    }
}
