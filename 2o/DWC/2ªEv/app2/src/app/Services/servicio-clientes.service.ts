import { Injectable } from '@angular/core';
import { Cliente } from '../Models/cliente'

@Injectable({
  providedIn: 'root'
})
export class ServicioClientesService {

  constructor() { }

  clientes: Array<Cliente> = [
    {
      id: 1,
      nombre: 'Ana',
      cargo: 'Programadora',
      foto: '1.jpg'
    },
    {
      id: 2,
      nombre: 'Elena',
      cargo: 'Administrativa',
      foto: '2.jpg'
    },
    {
      id: 3,
      nombre: 'Juan',
      cargo: 'Analista',
      foto: '3.jpg'
    },
    {
      id: 4,
      nombre: 'Luis',
      cargo: 'Programador',
      foto: '4.jpg'
    },
    {
      id: 5,
      nombre: 'Maria',
      cargo: 'Diseñadora',
      foto: '5.jpg'
    },
    {
      id: 6,
      nombre: 'Pedro',
      cargo: 'Marketing',
      foto: '6.jpg'
    }
  ];

  getClientes() {
    return this.clientes;
  }

  getCliente(id: number) {
    let pos = this.clientes.findIndex(c => c.id == id);
    return this.clientes[pos];
  }

  postCliente(cliente: Cliente) {
    this.clientes.push(cliente);
  }

  putCliente(cliente: Cliente) {
    let pos = this.clientes.findIndex(c => c.id == cliente.id);
    this.clientes[pos] = cliente;
  }

  deleteCliente(id: number) {
    let pos = this.clientes.findIndex(c => c.id == id)
    this.clientes.splice(pos, 1);
  }
}
