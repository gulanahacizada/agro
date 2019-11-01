import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {TranslateLoader, TranslateModule} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';
import {HttpClient } from '@angular/common/http';

import { AgronomsRoutingModule } from './agronoms-routing.module';
import { AgronomsComponent } from '../agronoms.component';
import { PaginatorModule } from 'primeng/paginator';
import { AgronomDetailComponent } from '../components/agronom-detail/agronom-detail.component';
import { SafePipe } from '../../../../safe.pipe';

@NgModule({
  declarations: [AgronomsComponent, AgronomDetailComponent, SafePipe],
  imports: [
    CommonModule,
    AgronomsRoutingModule,
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
export class AgronomsModule { }

export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http);
}
