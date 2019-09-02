import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ProductsRoutingModule } from './products-routing.module';
import { ProductsComponent } from '../products.component';
import { SalesProductsComponent } from '../components/sales-products/sales-products.component';
import { ProductsInComponent } from '../components/products-in/products-in.component';

@NgModule({
  declarations: [ProductsComponent, SalesProductsComponent, ProductsInComponent],
  imports: [
    CommonModule,
    ProductsRoutingModule
  ]
})
export class ProductsModule { }
