import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { BirjaTopRoutingModule } from './birja-top-routing.module';
import { BirjaTopComponent } from '../birja-top.component';

@NgModule({
  declarations: [BirjaTopComponent],
  imports: [
    CommonModule,
    BirjaTopRoutingModule
  ]
})
export class BirjaTopModule { }
