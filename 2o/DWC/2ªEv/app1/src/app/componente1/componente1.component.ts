import { Component, OnInit } from '@angular/core';
import { ServicioTrabajadoresService } from '../Servicios/servicio-trabajadores.service';

@Component({
  selector: 'app-componente1',
  templateUrl: './componente1.component.html',
  styleUrls: ['./componente1.component.css']
})
export class Componente1Component implements OnInit {

  constructor(private myService: ServicioTrabajadoresService) {

  }

  ngOnInit(): void {
  }

  message = this.myService.getMessage() + " from component1";

}
