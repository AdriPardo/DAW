import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BorraClienteComponent } from './borra-cliente/borra-cliente.component';
import { ClientesComponent } from './clientes/clientes.component';
import { ErrorComponent } from './error/error.component';
import { NoLoginGuard } from './Guards/no-login.guard';
import { InicioComponent } from './inicio/inicio.component';
import { ModificaClienteComponent } from './modifica-cliente/modifica-cliente.component';
import { NoLoginComponent } from './no-login/no-login.component';
import { NuevoClienteComponent } from './nuevo-cliente/nuevo-cliente.component';
import { PaginaProhibidaComponent } from './pagina-prohibida/pagina-prohibida.component';
import { VerClienteComponent } from './ver-cliente/ver-cliente.component';

const routes: Routes = [
  { path: '', component: InicioComponent },
  { path: 'clientes', component: ClientesComponent },
  { path: 'nuevoCliente', component: NuevoClienteComponent },
  { path: 'borraCliente/:id', component: BorraClienteComponent },
  { path: 'modificaCliente/:id', component: ModificaClienteComponent },
  { path: 'verCliente/:id', component: VerClienteComponent },
  { path: 'nologin', component: NoLoginComponent },
  { path: 'prohibida', component: PaginaProhibidaComponent, canActivate:[NoLoginGuard] },
  { path: '**', component: ErrorComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
