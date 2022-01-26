import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Cliente } from '../Modelos/Clientes';
import { ClientesService } from '../Servicios/clientes.service';

@Component({
  selector: 'app-ver-cliente',
  templateUrl: './ver-cliente.component.html',
  styleUrls: ['./ver-cliente.component.css']
})
export class VerClienteComponent implements OnInit {

  cliente!:Cliente;

  constructor(private miRuta:ActivatedRoute,
              private miServicio:ClientesService,
              private miRouter:Router) { }

  ngOnInit(): void {
    let id=this.miRuta.snapshot.params["id"];
    this.cliente=this.miServicio.getCliente(id);

  }

}
