import { OffersComingComponent } from './../components/offers-coming/offers-coming.component';
import { OffersSendComponent } from './../components/offers-send/offers-send.component';
import { OffersComponent } from './../offers.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    children: [
      {
        path: '',
        component: OffersComponent
      },
      {
        path: 'send',
        component: OffersSendComponent
      },
      {
        path: 'coming',
        component: OffersComingComponent
      }
    ],
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class OffersRoutingModule { }
