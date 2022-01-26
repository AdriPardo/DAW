import { Component, OnInit } from '@angular/core';
import { Cliente } from '../Modelos/Clientes';
import { ClientesService } from '../Servicios/clientes.service';

@Component({
  selector: 'app-clientes',
  templateUrl: './clientes.component.html',
  styleUrls: ['./clientes.component.css']
})
export class ClientesComponent implements OnInit {
  clientes:Cliente[]=[]

  constructor(private miServicio:ClientesService) { }

  ngOnInit(): void {
    this.clientes=this.miServicio.getClientes();
  }




}
