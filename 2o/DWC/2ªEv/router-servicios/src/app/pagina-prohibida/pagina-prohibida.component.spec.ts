import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PaginaProhibidaComponent } from './pagina-prohibida.component';

describe('PaginaProhibidaComponent', () => {
  let component: PaginaProhibidaComponent;
  let fixture: ComponentFixture<PaginaProhibidaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ PaginaProhibidaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(PaginaProhibidaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
