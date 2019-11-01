import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {TranslateLoader, TranslateModule} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';
import {HttpClient } from '@angular/common/http';

import { MainRoutingModule } from './main-routing.module';
import { MainComponent } from '../main.component';
import { AppSharedModule } from 'src/app/shared/appShared.module';

@NgModule({
  declarations: [MainComponent],
  imports: [
    CommonModule,
    MainRoutingModule,
    AppSharedModule,
    TranslateModule.forRoot({
      loader: {
          provide: TranslateLoader,
          useFactory: HttpLoaderFactory,
          deps: [HttpClient]
      }
  })
  ]
})
export class MainModule { }

export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http);
}
