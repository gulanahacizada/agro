import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { BirjaRoutingModule } from './birja-routing.module';
import { BirjaComponent } from '../birja.component';

@NgModule({
  declarations: [BirjaComponent],
  imports: [
    CommonModule,
    BirjaRoutingModule
  ]
})
export class BirjaModule { }
