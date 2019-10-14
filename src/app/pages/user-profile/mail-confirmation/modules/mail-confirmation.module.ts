import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { MailConfirmationRoutingModule } from './mail-confirmation-routing.module';
import { MailConfirmationComponent } from '../mail-confirmation.component';

@NgModule({
  declarations: [MailConfirmationComponent],
  imports: [
    CommonModule,
    MailConfirmationRoutingModule
  ]
})
export class MailConfirmationModule { }
