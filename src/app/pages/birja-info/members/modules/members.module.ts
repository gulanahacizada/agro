import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { MembersRoutingModule } from './members-routing.module';
import { MembersComponent } from '../members.component';
import { PaginatorModule } from 'primeng/paginator';

@NgModule({
  declarations: [MembersComponent],
  imports: [
    CommonModule,
    MembersRoutingModule,
    PaginatorModule
  ]
})
export class MembersModule { }
