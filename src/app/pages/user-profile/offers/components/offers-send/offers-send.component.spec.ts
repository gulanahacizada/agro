import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { OffersSendComponent } from './offers-send.component';

describe('OffersSendComponent', () => {
  let component: OffersSendComponent;
  let fixture: ComponentFixture<OffersSendComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ OffersSendComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(OffersSendComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
