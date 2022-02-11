const mongoose = require('mongoose');
const Autor = require(__dirname + "/autor");

let comentarioSchema = new mongoose.Schema({
    fecha: {
        type: Date,
        required: true,
        default: Date.now()
    },
    nick: {
        type: String,
        required: true
    },
    comentario: {
        type: String,
        required: true,
    }
});

let Comentario = mongoose.model('comentarios', comentarioSchema);
module.exports = Comentario;

let libroSchema = new mongoose.Schema({
    titulo: {
        type: String,
        required: true,
        minlength: 3,
    },
    editorial: String,
    precio: {
        type: Number,
        required: true,
        min: 0
    },
    autor: {
        type: mongoose.Schema.Types.ObjectId,
        ref: Autor
    },
    comentarios: [{
        type: Comentario.schema,
        ref: Comentario
    }]
});

let Libro = mongoose.model('libros', libroSchema);
module.exports = Libro;