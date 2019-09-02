import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductsInComponent } from './products-in.component';

describe('ProductsInComponent', () => {
  let component: ProductsInComponent;
  let fixture: ComponentFixture<ProductsInComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProductsInComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductsInComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
