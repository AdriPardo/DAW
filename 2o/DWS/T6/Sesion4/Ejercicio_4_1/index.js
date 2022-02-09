const mongoose = require('mongoose');
const Contacto = require(__dirname + "/models/libro");

mongoose.connect('mongodb://localhost:27017/libros',
 { useNewUrlParser: true, useUnifiedTopology: true });


