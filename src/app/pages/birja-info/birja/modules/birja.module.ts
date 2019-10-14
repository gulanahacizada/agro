import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {DropdownModule} from 'primeng/dropdown';
import {CalendarModule} from 'primeng/calendar';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { BirjaRoutingModule } from './birja-routing.module';
import { BirjaComponent } from '../birja.component';
import { ProductDetailComponent } from '../components/productDetail/productDetail.component';
import {PaginatorModule} from 'primeng/paginator';


@NgModule({
  declarations: [BirjaComponent, ProductDetailComponent],
  imports: [
    CommonModule,
    DropdownModule,
    CalendarModule,
    FormsModule,
    ReactiveFormsModule,
    BirjaRoutingModule,
    PaginatorModule
  ]
})
export class BirjaModule { }
