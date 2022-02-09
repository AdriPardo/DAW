const moment = require('moment');
let ahora = moment();
let antes = moment("07/10/2015", "DD/MM/YYYY");
let despues = moment("07/10/2024", "DD/MM/YYYY");



console.log(moment.duration(ahora.diff(antes)).years())
console.log("Años que faltan:" + moment.duration(ahora.diff(despues)).years())
console.log("Meses que faltan:" + moment.duration(ahora.diff(despues)).months())

if (antes.isBefore(ahora)) {
    console.log("La fecha de antes es anterior a la de ahora")
}
if (ahora.isAfter(antes)) {
    console.log("La fecha de antes es posterior a la de ahora")
}


let dentroUnMes = moment("08/02/2022", "DD/MM/YYYY");
console.log(dentroUnMes.format("DD/MM/YYYY"));