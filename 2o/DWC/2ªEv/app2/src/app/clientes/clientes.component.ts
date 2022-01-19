import { Component, OnInit } from '@angular/core';
import { Cliente } from '../Models/cliente';
import { ServicioClientesService } from '../Services/servicio-clientes.service';

@Component({
  selector: 'app-clientes',
  templateUrl: './clientes.component.html',
  styleUrls: ['./clientes.component.css']
})
export class ClientesComponent implements OnInit {

  clientes:Cliente[]=[]
  constructor(private miServicio:ServicioClientesService) { }

  ngOnInit(): void {
    this.clientes=this.miServicio.getClientes();
  }

}
