import { Component, OnInit } from '@angular/core';
import { Tarea } from '../models/tarea';
import { TareasService } from '../services/tareas.service';

@Component({
  selector: 'app-tareas',
  templateUrl: './tareas.component.html',
  styleUrls: ['./tareas.component.css']
})
export class TareasComponent implements OnInit {
  tareas: Tarea[] = [];
  totalTareas: any;
  constructor(private miServicio: TareasService,) { }

  ngOnInit(): void {
    this.tareas = this.miServicio.getTareas(),
      this.totalTareas = this.miServicio.getTotales();
  }

  estadoSeleccionado: string = 'Todas';

  filtrarTareas(estado: string) {
    this.tareas = this.miServicio.filtrarTareas(estado);
  }
}
