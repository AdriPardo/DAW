const Sequelize = require('sequelize');
const sequelize = new Sequelize('canciones', 'root', '', {
    host: '127.0.0.1',
    dialect: 'mariadb'
});
const ModeloCancion = require(__dirname + '/models/cancion');
const Cancion = ModeloCancion(sequelize, Sequelize);

sequelize.sync()
    .then(() => {
        /* Cancion.create({
            titulo: "Oda a los NFTS",
            duracion: "370",
            artista: "Adrian Pardo"
            
        }).then(resultado => {
            if (resultado)
                console.log("Cancion creada con estos datos:", resultado);
            else
                console.log("Error insertando cancion");
        }).catch(error => {
            console.log("Error insertando cancion:", error);
        }); */
        Cancion.findByPk(1).then(cancion => {
            if (cancion)
                return cancion.destroy();
            else
                reject("Error borrando cancion");
        }).then(resultado => {
            console.log("Cancion borrada: ", resultado);
        }).catch(error => {
            console.log("Error borrando cancion: ", error);
        });


    }).catch(error => {
        console.log(error);
    });

Cancion.findByPk(1).then(resultado => {
    if (resultado)
        console.log("Cancion encontrada: ", resultado);
    else
        console.log("No se ha encontrado cancion");
}).catch(error => {
    console.log("Error buscando cancion: ", error);
});

Cancion.findByPk(3).then(cancion => {
    if (cancion)
        return cancion.update({ duracion: "12" });
    else
        reject("Error actualizando cancion");
}).then(resultado => {
    console.log("Cancion actualizada: ", resultado);
}).catch(error => {
    console.log("Error actualizando cancion: ", error);
});


