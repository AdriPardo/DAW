import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Cliente } from '../Modelos/Clientes';
import { ClientesService } from '../Servicios/clientes.service';

@Component({
  selector: 'app-modifica-cliente',
  templateUrl: './modifica-cliente.component.html',
  styleUrls: ['./modifica-cliente.component.css']
})
export class ModificaClienteComponent implements OnInit {

  miCliente!:Cliente;

  constructor(private miServicio:ClientesService,
              private miRouter:Router,
              private miRuta:ActivatedRoute) { }

  ngOnInit(): void {
    let id=this.miRuta.snapshot.params["id"]
    this.miCliente=this.miServicio.getCliente(id)
  }

  grabaCliente(){
    this.miServicio.putCliente(this.miCliente);
    this.miRouter.navigate(["/clientes"])
  }

  volver(){}

}
