import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import {TranslateLoader, TranslateModule} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';
import {HttpClient } from '@angular/common/http';

import { ProductsRoutingModule } from './products-routing.module';
import { ProductsComponent } from '../products.component';
import { ProductDetailsComponent } from '../components/productDetails/productDetails.component';
import { AppSharedModule } from 'src/app/shared/appShared.module';

@NgModule({
  declarations: [ProductsComponent, ProductDetailsComponent],
  imports: [
    CommonModule,
    ProductsRoutingModule,
    FormsModule,
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

