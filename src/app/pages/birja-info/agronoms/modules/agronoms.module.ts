import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

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
    PaginatorModule
  ]
})
export class AgronomsModule { }
