import { Injectable } from '@angular/core';
import { Tarea } from '../models/tarea';

@Injectable({
  providedIn: 'root'
})
export class TareasService {

  constructor() { }
  tareas: Tarea[] = [
    {
      id: '1',
      nombre: 'Examen Cliente',
      estado: 'Pendiente'
    },
    {
      id: '2',
      nombre: 'Examen Servidor',
      estado: 'Pendiente'
    },
    {
      id: '3',
      nombre: 'Examen Interfaces',
      estado: 'Realizada'
    },
    {
      id: '4',
      nombre: 'Examen Despliegue',
      estado: 'Pendiente'
    }
  ];

  getTareas() {
    return this.tareas
  }

  getTarea(id: string) {
    let pos = this.tareas.findIndex(c => c.id == id)
    return this.tareas[pos]
  }

  endTarea(id: string) {
    let pos = this.tareas.findIndex(c => c.id == id)
    this.tareas[pos].estado = 'Realizada'
  }

  getTotales() {
    let totalTareas = {
      totRealizadas: 0,
      totPendientes: 0
    }

    this.tareas.map(t => {
      if (t.estado === 'Pendiente') {
        totalTareas.totPendientes++;
      }
      else {
        totalTareas.totRealizadas++;
      }
    });

    return totalTareas;
  }

  deleteTarea(id: string) {
    let pos = this.tareas.findIndex(c => c.id == id)
    this.tareas.splice(pos, 1)
  }

  filtrarTareas(estado: string) {
    if (estado === 'Todas') {
      return this.tareas;
    }
    let tareasFiltradas: Array<Tarea> = [];
    this.tareas.map(t => {
      if (t.estado === estado) {
        tareasFiltradas.push(t);
      }
    });
     return tareasFiltradas;
  }
}
