import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BirjaComponent } from './birja.component';

describe('BirjaComponent', () => {
  let component: BirjaComponent;
  let fixture: ComponentFixture<BirjaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BirjaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BirjaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
