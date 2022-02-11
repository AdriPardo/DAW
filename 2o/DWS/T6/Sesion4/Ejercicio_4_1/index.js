const mongoose = require('mongoose');
const Libro = require(__dirname + "/models/libro");
const Autor = require(__dirname + "/models/autor");

mongoose.connect('mongodb://localhost:27017/libros',
    { useNewUrlParser: true, useUnifiedTopology: true });

/* let libro1 = new Libro({
    nombre: "El capitán Alatriste",
    editorial: "Alfaguara",
    precio: 15
});
libro1.save().then(resultado => {
    console.log("Libro añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo Libro:", error);
});

let libro2 = new Libro({
    nombre: "El juego de Ender",
    editorial: "Ediciones B",
    precio: 8.95
});
libro2.save().then(resultado => {
    console.log("Libro añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo Libro:", error);
}); */

/* Libro.find({ precio: { $gte: 10, $lte: 21 } }).then(resultado => {
    console.log(resultado);
}).catch(error => {
    console.log("ERROR:", error);
});

Libro.findById('6204cc03344b3e1ae9c9baab')
.then(resultado => {
 console.log('Resultado de la búsqueda por ID:', resultado);
})
.catch(error => {
 console.log('ERROR:', error);
});

Libro.findByIdAndRemove('6204cc03344b3e1ae9c9baab')
.then(resultado => {
 console.log("Libro eliminado:", resultado);
}).catch (error => {
 console.log("ERROR:", error);
});

Libro.findByIdAndUpdate('6204cc03344b3e1ae9c9baac',
 {$set:{precio:15}}, {new:true})
.then(resultado => {
 console.log("Modificado contacto:", resultado);
}).catch (error => {
 console.log("ERROR:", error);
});

Libro.findByIdAndUpdate('6204cc03344b3e1ae9c9baac',
 {$set:{__v:1}}, {new:true})
.then(resultado => {
 console.log("Modificado contacto:", resultado);
}).catch (error => {
 console.log("ERROR:", error);
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
    editorial: "Logongas",
    precio: 15,
    autor: '620275d1f552b0185badfac3',
});
libro4.comentarios.push({nick: 'Juanito Juan', comentario: 'Hola Cesar'});
libro4.comentarios.push({nick: 'Juanito Juan 2', comentario: 'Hola Cesar 2'});
libro4.save().then(resultado => {
    console.log("Libro añadido:", resultado);
}).catch(error => {
    console.log("ERROR añadiendo libro:", error);
});