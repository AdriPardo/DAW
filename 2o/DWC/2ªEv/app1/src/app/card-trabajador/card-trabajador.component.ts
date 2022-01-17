import { Component, Input, EventEmitter, Output, OnInit } from '@angular/core';
import { Trabajador } from '../Modelos/trabajador';

@Component({
  selector: 'app-card-trabajador',
  templateUrl: './card-trabajador.component.html',
  styleUrls: ['./card-trabajador.component.css']
})
export class CardTrabajadorComponent implements OnInit {

  @Input() trabajador!: Trabajador;

  @Output() sumaLike = new EventEmitter<number>();
  @Output() restaLike = new EventEmitter<number>();
  @Output() borraTrabajador = new EventEmitter<number>();

  constructor() { }

  ngOnInit(): void {
  }

  like(trabajador: Trabajador) {
    this.sumaLike.emit(trabajador.id);
  }

  //metodo que recibe un trabajador y emite el evento unlikeTrabajador con el id del trabajador
  unlike(trabajador: Trabajador) {
    this.restaLike.emit(trabajador.id);
  }

  //metodo que recibe un trabajador y emite el evento borraTrabajador con el id del trabajador
  eliminar(trabajador: Trabajador) {
    this.borraTrabajador.emit(trabajador.id);
  }
}

