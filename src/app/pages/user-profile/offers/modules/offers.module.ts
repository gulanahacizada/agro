import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {DropdownModule} from 'primeng/dropdown';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import {TranslateLoader, TranslateModule} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';
import {HttpClient } from '@angular/common/http';

import { OffersRoutingModule } from './offers-routing.module';
import { OffersComponent } from '../offers.component';
import { MessageDetailsComponent } from '../components/messageDetails/messageDetails.component';

@NgModule({
  declarations: [OffersComponent, MessageDetailsComponent],
  imports: [
    CommonModule,
    OffersRoutingModule,
    DropdownModule,
    FormsModule,
    ReactiveFormsModule,
    TranslateModule.forRoot({
      loader: {
          provide: TranslateLoader,
          useFactory: HttpLoaderFactory,
          deps: [HttpClient]
      }
  })
  ]
})
export class OffersModule { }
export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http);
}
