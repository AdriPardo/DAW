import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Tarea } from '../models/tarea';
import { TareasService } from '../services/tareas.service';

@Component({
  selector: 'app-finalizar-tarea',
  templateUrl: './finalizar-tarea.component.html',
  styleUrls: ['./finalizar-tarea.component.css']
})
export class FinalizarTareaComponent implements OnInit {
  miTarea!: Tarea;
  constructor(private miServicio: TareasService,
    private miRouter: Router,
    private miRuta: ActivatedRoute) { }

  ngOnInit(): void {
    let id = this.miRuta.snapshot.params["id"]
    this.miTarea = this.miServicio.getTarea(id)
  }

  cancelar() {
    this.miRouter.navigate(["/tareas"])
  }

  finalizar(){
    this.miServicio.endTarea(this.miTarea.id)
    this.miRouter.navigate(["/tareas"])
  }

}
