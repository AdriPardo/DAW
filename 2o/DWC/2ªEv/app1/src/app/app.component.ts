import { Component } from '@angular/core';
import { ServicioTrabajadoresService } from './Servicios/servicio-trabajadores.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent {

  constructor(private myService:ServicioTrabajadoresService) {

  }


  message = this.myService.getMessage();

  trabajadores = this.myService.getTrabajadores();

  titulo = 'Listado de trabajadores';


  borrar(id: number) {
    let pos = this.trabajadores.findIndex(t => t.id == id);
    alert("Has seleccionado: " + this.trabajadores[pos].nombre);
    this.trabajadores.splice(pos, 1)
  }

  sumaVoto(id: number) {
    let pos = this.trabajadores.findIndex(t => t.id == id);
    this.trabajadores[pos].votos++;
  }

  restaVoto(id: number) {
    let pos = this.trabajadores.findIndex(t => t.id == id);
    if (this.trabajadores[pos].votos === 0) {
      return alert('No se puede restar likes si tiene 0');
    }
    else {
      this.trabajadores[pos].votos--;
    }
  }

}
