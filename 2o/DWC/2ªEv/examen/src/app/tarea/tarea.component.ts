import { Component, OnInit, Output, EventEmitter, Input } from '@angular/core';
import { Tarea } from '../models/tarea';

@Component({
  selector: 'app-tarea',
  templateUrl: './tarea.component.html',
  styleUrls: ['./tarea.component.css']
})
export class TareaComponent implements OnInit {
  @Input() tarea!: Tarea;

  @Output() eventoBorrar = new EventEmitter<string>();


  constructor() {

  }

  ngOnInit(): void {

  }


  borrar(tarea: Tarea) {

    this.eventoBorrar.emit(tarea.id)

  }


}
