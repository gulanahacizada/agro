import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AgronomsRoutingModule } from './agronoms-routing.module';
import { AgronomsComponent } from '../agronoms.component';

@NgModule({
  declarations: [AgronomsComponent],
  imports: [
    CommonModule,
    AgronomsRoutingModule
  ]
})
export class AgronomsModule { }
