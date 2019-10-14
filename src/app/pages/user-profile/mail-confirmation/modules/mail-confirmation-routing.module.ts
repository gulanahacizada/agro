import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MailConfirmationComponent } from '../mail-confirmation.component';

const routes: Routes = [
  {
    path: '',
    component: MailConfirmationComponent
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MailConfirmationRoutingModule { }
