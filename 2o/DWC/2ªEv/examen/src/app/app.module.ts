import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { InicioComponent } from './inicio/inicio.component';
import { TareasComponent } from './tareas/tareas.component';
import { FinalizarTareaComponent } from './finalizar-tarea/finalizar-tarea.component';
import { BorrarTareasComponent } from './borrar-tareas/borrar-tareas.component';
import { TareaComponent } from './tarea/tarea.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    InicioComponent,
    TareasComponent,
    FinalizarTareaComponent,
    BorrarTareasComponent,
    TareaComponent
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
