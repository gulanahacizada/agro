import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {TranslateLoader, TranslateModule} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';
import {PaginatorModule} from 'primeng/paginator';

import { BirjaTopRoutingModule } from './birja-top-routing.module';
import { BirjaTopComponent } from '../birja-top.component';
import { HttpClient } from '@angular/common/http';

@NgModule({
  declarations: [BirjaTopComponent],
  imports: [
    CommonModule,
    BirjaTopRoutingModule,
    PaginatorModule,
    TranslateModule.forRoot({
      loader: {
          provide: TranslateLoader,
          useFactory: HttpLoaderFactory,
          deps: [HttpClient]
      }
  })
  ]
})
export class BirjaTopModule { }

export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http);
}
