import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BorraClienteComponent } from './borra-cliente.component';

describe('BorraClienteComponent', () => {
  let component: BorraClienteComponent;
  let fixture: ComponentFixture<BorraClienteComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BorraClienteComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(BorraClienteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
