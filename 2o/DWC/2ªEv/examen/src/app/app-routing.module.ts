import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BorrarTareasComponent } from './borrar-tareas/borrar-tareas.component';
import { FinalizarTareaComponent } from './finalizar-tarea/finalizar-tarea.component';
import { InicioComponent } from './inicio/inicio.component';
import { TareasComponent } from './tareas/tareas.component';

const routes: Routes = [
  { path: 'inicio', component: InicioComponent },
  { path: 'tareas', component: TareasComponent },
  { path: 'finalizarTarea/:id', component: FinalizarTareaComponent },
  { path: 'borrarTareas', component: BorrarTareasComponent },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
