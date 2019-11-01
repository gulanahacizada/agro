import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DropdownModule } from 'primeng/dropdown';
import { CalendarModule } from 'primeng/calendar';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import {TranslateLoader, TranslateModule} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';
import {HttpClient } from '@angular/common/http';


import { ProductsRoutingModule } from './products-routing.module';
import { ProductsComponent } from '../products.component';
import { ProductsInComponent } from '../components/products-in/products-in.component';
import { AddProductComponent } from '../components/add-product/add-product.component';
import { EditProductComponent } from '../components/edit-product/edit-product.component';
import { PaginatorModule } from 'primeng/paginator';
import { AppSharedModule } from 'src/app/shared/appShared.module';

@NgModule({
  declarations: [
    ProductsComponent,
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
    PaginatorModule,
    ReactiveFormsModule,
    AppSharedModule,
    TranslateModule.forRoot({
      loader: {
          provide: TranslateLoader,
          useFactory: HttpLoaderFactory,
          deps: [HttpClient]
      }
  })
  ]
})
export class ProductsModule { }

export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http);
}
