const mongoose = require('mongoose');
const Libro = require(__dirname + "/models/libro");
const Autor = require(__dirname + "/models/autor");

mongoose.connect('mongodb://localhost:27017/libros', { useNewUrlParser: true, useUnifiedTopology: true });

/* let libro1 = new Libro({
    titulo: "El capitan Alatriste",
    editorial: "Alfaguara",
    precio: 15
});
libro1.save().then(resultado => {
    console.log("Libro añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo libro:", error);
});
let libro2 = new Libro({
    titulo: "El juego de Ender",
    editorial: "Ediciones B",
    precio: 8.95
});
libro2.save().then(resultado => {
    console.log("Libro añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo libro:", error);
}) */

/* Libro.find({ precio: { $gte: 10, $lte: 20 } })
    .then(resultado => {
        console.log('Resultado de la búsqueda:', resultado);
    })
    .catch(error => {
        console.log('ERROR:', error);
    }); */

/* Libro.findOne({ titulo: 'El capitan Alatriste' })
    .then(resultado => {
        Libro.findById(resultado._id)
            .then(resultado => {
                console.log('Resultado de la búsqueda por ID:', resultado);
            })
            .catch(error => {
                console.log('ERROR:', error);
            });
    })
    .catch(error => {
        console.log('ERROR:', error);
    }); */

/* Libro.findOne({ titulo: 'El capitan Alatriste' })
    .then(resultado => {
        Libro.findByIdAndRemove(resultado._id)
            .then(resultado => {
                console.log("Libro eliminado:", resultado);
            }).catch(error => {
                console.log("ERROR:", error);
            });
    })
    .catch(error => {
        console.log('ERROR:', error);
    }); */

/* Libro.findOne({ titulo: 'El juego de Ender' })
    .then(resultado => {
        Libro.findByIdAndUpdate(resultado._id,
            { $set: { precio: 40 } }, { new: true })
            .then(resultado => {
                console.log("Modificado libro:", resultado);
            }).catch(error => {
                console.log("ERROR:", error);
            });
    })
    .catch(error => {
        console.log('ERROR:', error);
    }); */

let autor1 = new Autor({
    nombre: "Cesar Guijarro",
    anyoNacimiento: 1965
});
autor1.save().then(resultado => {
    console.log("Autor añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo autor:", error);
});   
let autor2 = new Autor({
    nombre: "Lorenzo Gonzalez",
    anyoNacimiento: 1970
});
autor2.save().then(resultado => {
    console.log("Autor añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo autor:", error);
});  

let libro3 = new Libro({
    titulo: "Nacholo",
    editorial: "Logongas",
    precio: 15,
    autor: '620275d1f552b0185badfac3'
});
libro3.save().then(resultado => {
    console.log("Libro añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo libro:", error);
});

let libro4 = new Libro({
    titulo: "Oda a los NFT",
    editorial: "Ediciones Adrian",
    precio: 15,
    autor: '620275d1f552b0185badfac3',
});
libro4.comentarios.push({nick: 'aadripaardo', comentario: 'Hola Cesar ponme un 10'});
libro4.comentarios.push({nick: 'Juanito Juan', comentario: 'Hola Cesar ponme un 10 <3'});
libro4.save().then(resultado => {
    console.log("Libro añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo libro:", error);
});