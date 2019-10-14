import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AgronomsRoutingModule } from './agronoms-routing.module';
import { AgronomsComponent } from '../agronoms.component';
import { PaginatorModule } from 'primeng/paginator';

@NgModule({
  declarations: [AgronomsComponent],
  imports: [
    CommonModule,
    AgronomsRoutingModule,
    PaginatorModule
  ]
})
export class AgronomsModule { }
