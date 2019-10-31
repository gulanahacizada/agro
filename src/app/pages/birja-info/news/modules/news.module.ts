import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {TranslateLoader, TranslateModule} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';
import {HttpClient } from '@angular/common/http';

import { NewsRoutingModule } from './news-routing.module';
import { NewsComponent } from '../news.component';
import { PaginatorModule } from 'primeng/paginator';
import { NewDetailComponent } from '../components/new-detail/new-detail.component';

@NgModule({
  declarations: [NewsComponent, NewDetailComponent],
  imports: [
    CommonModule,
    NewsRoutingModule,
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
export class NewsModule { }

export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http);
}
