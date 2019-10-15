import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { NewsRoutingModule } from './news-routing.module';
import { NewsComponent } from '../news.component';
import { PaginatorModule } from 'primeng/paginator';
import { NewDetailComponent } from '../components/new-detail/new-detail.component';

@NgModule({
  declarations: [NewsComponent, NewDetailComponent],
  imports: [
    CommonModule,
    NewsRoutingModule,
    PaginatorModule
  ]
})
export class NewsModule { }
