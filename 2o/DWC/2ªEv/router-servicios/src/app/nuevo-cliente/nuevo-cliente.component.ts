import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Cliente } from '../Modelos/Clientes';
import { ClientesService } from '../Servicios/clientes.service';

@Component({
  selector: 'app-nuevo-cliente',
  templateUrl: './nuevo-cliente.component.html',
  styleUrls: ['./nuevo-cliente.component.css']
})
export class NuevoClienteComponent implements OnInit {

  constructor(private miServicio: ClientesService,
    private miRouter: Router) { }

  miCliente: Cliente = {
    id: 0,
    nombre: "",
    cargo: "",
    foto: ""
  }

  ngOnInit(): void {
  }

  grabaCliente() {


    alert("Vamos a grabar...");

    this.miCliente.foto = this.miCliente.id + ".jpg"
    console.log(this.miCliente);

    this.miServicio.postCliente(this.miCliente);
    this.miRouter.navigate(["/clientes"]);


  }

}
