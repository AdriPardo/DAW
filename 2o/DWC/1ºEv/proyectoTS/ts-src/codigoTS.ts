function getMessage(): string {
    return "Hola...";
}

class Alumno {
    nombre: string;
    constructor(nombre: string) {
        this.nombre = nombre;
    }

    saludo() {
        alert("Hola" + this.nombre)
    }
}