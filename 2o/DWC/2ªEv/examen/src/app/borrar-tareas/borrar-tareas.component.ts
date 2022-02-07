import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Tarea } from '../models/tarea';
import { TareasService } from '../services/tareas.service';

@Component({
  selector: 'app-borrar-tareas',
  templateUrl: './borrar-tareas.component.html',
  styleUrls: ['./borrar-tareas.component.css']
})
export class BorrarTareasComponent implements OnInit {
  tareas:Tarea[]=[];
  constructor(private miServicio: TareasService,
    private miRouter: Router) { }

  ngOnInit(): void {
this.tareas=this.miServicio.getTareas();
  }


  borrarTarea(id: string) {
    this.miServicio.deleteTarea(id);
  }
  volver() {
    this.miRouter.navigate(["/tareas"])
  }
}
