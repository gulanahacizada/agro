import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { OffersRoutingModule } from './offers-routing.module';
import { OffersComponent } from '../offers.component';
import { OffersSendComponent } from '../components/offers-send/offers-send.component';
import { OffersComingComponent } from '../components/offers-coming/offers-coming.component';

@NgModule({
  declarations: [OffersComponent, OffersSendComponent, OffersComingComponent],
  imports: [
    CommonModule,
    OffersRoutingModule
  ]
})
export class OffersModule { }
