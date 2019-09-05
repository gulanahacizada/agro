import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ProductsRoutingModule } from './products-routing.module';
import { ProductsComponent } from '../products.component';
import { SalesProductsComponent } from '../components/sales-products/sales-products.component';
import { ProductsInComponent } from '../components/products-in/products-in.component';
import { AddProductComponent } from '../components/add-product/add-product.component';
import { EditProductComponent } from '../components/edit-product/edit-product.component';

@NgModule({
  declarations: [
    ProductsComponent,
    SalesProductsComponent,
    ProductsInComponent,
    AddProductComponent,
    EditProductComponent
  ],
  imports: [
    CommonModule,
    ProductsRoutingModule,
    ]
})
export class ProductsModule { }
