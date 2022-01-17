import { TestBed } from '@angular/core/testing';

import { ServicioTrabajadoresService } from './servicio-trabajadores.service';

describe('ServicioTrabajadoresService', () => {
  let service: ServicioTrabajadoresService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ServicioTrabajadoresService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
