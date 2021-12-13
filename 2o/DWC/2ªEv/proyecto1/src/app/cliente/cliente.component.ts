import { Component, OnInit } from '@angular/core';
import { Alumno } from '../modelos/alumno.modelo';

@Component({
  selector: 'app-cliente',
  templateUrl: './cliente.component.html',
  styleUrls: ['./cliente.component.css']
})
export class ClienteComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  title: String = "Probando interpolacion";
  totalAlumno: number = 10;
  alumno1 = new Alumno(1, 'Juan', 'Gutierrez', 'Madrid');

}
