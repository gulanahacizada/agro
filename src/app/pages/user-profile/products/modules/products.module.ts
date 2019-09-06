import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {DropdownModule} from 'primeng/dropdown';
import {CalendarModule} from 'primeng/calendar';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';


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
    EditProductComponent,

  ],
  imports: [
    CommonModule,
    ProductsRoutingModule,
    DropdownModule,
    CalendarModule,
    FormsModule,
    ReactiveFormsModule
    ]
})
export class ProductsModule { }
