import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { InicioComponent } from './inicio/inicio.component';
import { HeaderComponent } from './header/header.component';
import { ClientesComponent } from './clientes/clientes.component';
import { NuevoClienteComponent } from './nuevo-cliente/nuevo-cliente.component';
import { BorraClienteComponent } from './borra-cliente/borra-cliente.component';
import { ModificaClienteComponent } from './modifica-cliente/modifica-cliente.component';
import { ErrorComponent } from './error/error.component';
import { FormsModule } from '@angular/forms';
import { VerClienteComponent } from './ver-cliente/ver-cliente.component';
import { NoLoginComponent } from './no-login/no-login.component';
import { PaginaProhibidaComponent } from './pagina-prohibida/pagina-prohibida.component';

@NgModule({
  declarations: [
    AppComponent,
    InicioComponent,
    HeaderComponent,
    ClientesComponent,
    NuevoClienteComponent,
    BorraClienteComponent,
    ModificaClienteComponent,
    ErrorComponent,
    VerClienteComponent,
    NoLoginComponent,
    PaginaProhibidaComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
