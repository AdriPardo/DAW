const mysql = require('mysql');
let conexion = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "libros"
});

conexion.connect((error) => {
    if (error)
        console.log("Error al conectar con la BD:", err);
    else
        console.log("Conexión satisfactoria");
});

/* conexion.query("INSERT INTO libros" +
    "(id, titulo,autor, precio) VALUES " +
    "('4', 'El nombre de la Rosa', 'Juanito Juan','13' )", (error, resultado, campos) => {
        if (error)
            console.log("Error al procesar la inserción");
        else
            console.log("Nuevo id = ", resultado.insertId);
    });
conexion.query("INSERT INTO libros" +
    "(id, titulo,autor, precio) VALUES " +
    "('5', 'jgdshgdsgds', 'Juanito Juan','15' )", (error, resultado, campos) => {
        if (error)
            console.log("Error al procesar la inserción");
        else
            console.log("Nuevo id = ", resultado.insertId);
    });
conexion.query("INSERT INTO libros" +
    "(id, titulo,autor, precio) VALUES " +
    "('6', 'fñsgmfdñkh', 'Juanito Juan','13' )", (error, resultado, campos) => {
        if (error)
            console.log("Error al procesar la inserción");
        else
            console.log("Nuevo id = ", resultado.insertId);
    }); */


conexion.query("SELECT * FROM libros where precio > 10",
    (error, resultado, campos) => {
        if (error)
            console.log("Error al procesar la consulta");
        else {
            resultado.forEach((libro) => {
                console.log(libro.titulo, ":",
                    libro.autor)});
        }
    }
);

conexion.query("UPDATE libros SET precio=35 WHERE id=3",
    (error, resultado, campos) => {
        if (error)
            console.log("Error al procesar la consulta");
        else {
            console.log("Ha ido bien")
        }
    }
);

conexion.query("DELETE FROM libros WHERE id=3",
 (error, resultado, campos) => {
 if (error)
 console.log("Error al realizar el borrado");
 else
 console.log(resultado.affectedRows,
 "filas afectadas");
});