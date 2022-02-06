import { Injectable } from '@angular/core';
import { Articulo } from '../models/articulo'

@Injectable({
  providedIn: 'root'
})
export class ArticulosService {

  constructor() { }

  articulos: Articulo[] = [
    {
      id: 1,
      precio: 35.99,
      nombre: 'CAZADORA TRUCKER PANA CON BORREGUILLO',
      imagen: '1.jpg'
    },
    {
      id: 2,
      precio: 29.99,
      nombre: 'JEANS JOGGER DETALLES ROTOS',
      imagen: '2.jpg'
    },
    {
      id: 3,
      precio: 19.99,
      nombre: 'SUDADERA CANGURO CON CAPUCHA',
      imagen: '3.jpg'
    },
    {
      id: 4,
      precio: 25.99,
      nombre: 'CAZADORA COLLEGE COMBINADA PARCHE',
      imagen: '4.jpg'
    },
    {
      id: 5,
      precio: 29.99,
      nombre: 'JEANS SKINNY DETALLE ROTOS TEJIDO PREMIUM',
      imagen: '5.jpg'
    },
    {
      id: 6,
      precio: 25.99,
      nombre: 'ZAPATILLAS CASUAL PISO VOLUMEN',
      imagen: '6.jpg'
    },
  ]
  getArticulos(){
    return this.articulos
  }

  getArticulo(id:number){
   let pos=this.articulos.findIndex(c=>c.id==id)
   return this.articulos[pos]
  }

  postArticulo(a:Articulo){
     this.articulos.push(a)
  }

  putArticulo(a:Articulo){
   let pos=this.articulos.findIndex(e=>e.id==a.id)
   this.articulos[pos]=a
  }

  deleteArticulo(id:number){
   let pos=this.articulos.findIndex(c=>c.id==id)
   this.articulos.splice(pos,1)
  }

}
