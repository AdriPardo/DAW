import { ElementAst } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Cliente } from '../Modelos/Clientes';
import { ClientesService } from '../Servicios/clientes.service';

@Component({
  selector: 'app-borra-cliente',
  templateUrl: './borra-cliente.component.html',
  styleUrls: ['./borra-cliente.component.css']
})
export class BorraClienteComponent implements OnInit {

  cliente!:Cliente;

  constructor(private miRuta:ActivatedRoute,
              private miServicio:ClientesService,
              private miRouter:Router) { }

  ngOnInit(): void {
    let id=this.miRuta.snapshot.params["id"];
    this.cliente=this.miServicio.getCliente(id);
    
  }
  borrarCliente(){
    this.miServicio.deleteCliente(this.cliente.id)
    this.miRouter.navigate(["/clientes"])
    
  }
  
}
