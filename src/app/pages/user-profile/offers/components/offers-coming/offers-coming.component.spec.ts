import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { OffersComingComponent } from './offers-coming.component';

describe('OffersComingComponent', () => {
  let component: OffersComingComponent;
  let fixture: ComponentFixture<OffersComingComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ OffersComingComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(OffersComingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
