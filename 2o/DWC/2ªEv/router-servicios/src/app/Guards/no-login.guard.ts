import { Injectable } from '@angular/core';
import { ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot, UrlTree } from '@angular/router';
import { Observable } from 'rxjs';
import { ClientesService } from '../Servicios/clientes.service';

@Injectable({
  providedIn: 'root'
})
export class NoLoginGuard implements CanActivate {
  constructor(private router: Router){}
  
  canActivate(
    route: ActivatedRouteSnapshot,
    state: RouterStateSnapshot):  boolean  {
    
    let usuario=prompt ("Usuario: ");
    let password=prompt("Password: ")
    if (usuario!="Admin" || password!="123"){
      this.router.navigate(["/nologin"])
      return false
    }
    else
      return true;
  }
  
}
