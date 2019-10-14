
import { OffersComponent } from './../offers.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MessageDetailsComponent } from '../components/messageDetails/messageDetails.component';

const routes: Routes = [
  {
    path: '',
    children: [
      {
        path: '',
        component: OffersComponent
      },
      {
        path: 'details/:id',
        component: MessageDetailsComponent
      },
    ],
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class OffersRoutingModule { }
