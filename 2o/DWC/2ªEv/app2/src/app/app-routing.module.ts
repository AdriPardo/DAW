import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ClientesComponent } from './clientes/clientes.component';
import { ErrorComponent } from './error/error.component';
import { InicioComponent } from './inicio/inicio.component';
import { NuevoClienteComponent } from './nuevo-cliente/nuevo-cliente.component';

const routes: Routes = [
  {path:'',component:InicioComponent},
  {path:'clientes',component:ClientesComponent},
  {path:'nuevo',component:NuevoClienteComponent},
  {path:'**',component:ErrorComponent},

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
