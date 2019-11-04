import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BirjaTopComponent } from './birja-top.component';

describe('BirjaTopComponent', () => {
  let component: BirjaTopComponent;
  let fixture: ComponentFixture<BirjaTopComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BirjaTopComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BirjaTopComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
