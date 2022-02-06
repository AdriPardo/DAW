import { Component, OnInit } from '@angular/core';
import { Articulo } from '../models/articulo';
import { ArticulosService } from '../services/articulos.service';

@Component({
  selector: 'app-articulos',
  templateUrl: './articulos.component.html',
  styleUrls: ['./articulos.component.css']
})
export class ArticulosComponent implements OnInit {
  articulos: Articulo[] = [];
  constructor(private articulosService:ArticulosService) { }

  ngOnInit(): void {this.articulos=this.articulosService.getArticulos() }

}
