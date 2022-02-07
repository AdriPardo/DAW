import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BorrarTareasComponent } from './borrar-tareas.component';

describe('BorrarTareasComponent', () => {
  let component: BorrarTareasComponent;
  let fixture: ComponentFixture<BorrarTareasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BorrarTareasComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(BorrarTareasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
