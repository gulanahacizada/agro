import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AgronomsComponent } from './agronoms.component';

describe('AgronomsComponent', () => {
  let component: AgronomsComponent;
  let fixture: ComponentFixture<AgronomsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AgronomsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AgronomsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
