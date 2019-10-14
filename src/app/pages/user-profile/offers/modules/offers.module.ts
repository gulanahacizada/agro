import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {DropdownModule} from 'primeng/dropdown';

import { OffersRoutingModule } from './offers-routing.module';
import { OffersComponent } from '../offers.component';
import { MessageDetailsComponent } from '../components/messageDetails/messageDetails.component';

@NgModule({
  declarations: [OffersComponent, MessageDetailsComponent],
  imports: [
    CommonModule,
    OffersRoutingModule,
    DropdownModule
  ]
})
export class OffersModule { }
