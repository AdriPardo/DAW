let libroSchema = new mongoose.Schema({
    nombre: {
    type: String,
    required: true,
    minlength: 1,
    trim: true
    },
    editorial: {
    type: String,
    required: true,
    unique: true,
    trim: true,
    },
    precio: {
    type: Number,
    min: 18,
    max: 120
    }
   });
   let Libro = mongoose.model('libros', libroSchema);
   module.exports = Libro;