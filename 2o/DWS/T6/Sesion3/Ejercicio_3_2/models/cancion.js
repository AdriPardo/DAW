const Sequelize = require('sequelize');
module.exports = (sequelize, Sequelize) => {
    let Contacto = sequelize.define('canciones', {
        titulo: {
            type: Sequelize.STRING,
            allowNull: false
        },
        duracion: {
            type: Sequelize.INTEGER,
            allowNull: false
        },
        artista: {
            type: Sequelize.STRING,
            allowNull: false
        }
    });

    return Contacto;
};