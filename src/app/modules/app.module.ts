import { BrowserModule } from '@angular/platform-browser';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { NgModule } from '@angular/core';
import { HTTP_INTERCEPTORS, HttpClientModule, HttpClient } from '@angular/common/http';
import { JwtInterceptor } from '../services/interceptor/jwt.interceptor';
import { ErrorInterceptor } from '../services/interceptor/error.interceptor';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import {RadioButtonModule} from 'primeng/radiobutton';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from '../app.component';
import {TranslateLoader, TranslateModule} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';
import * as ngxOwlCarousel from 'ngx-owl-carousel';
import { HomeComponent } from '../pages/home/home.component';
import { CKEditorModule } from '@ckeditor/ckeditor5-angular';
import { AppSharedModule } from '../shared/appShared.module';
import {ChartsModule, ThemeService} from 'ng2-charts';
import { LoaderInterceptor } from '../services/loader/loader.interceptor';
import { LoaderService } from '../services/loader/loader.service';
import { SpinerComponent } from '../services/loader/spiner/spiner.component';




@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    SpinerComponent,
  ],
  imports: [
    BrowserModule.withServerTransition({ appId: 'serverApp' }),
    BrowserAnimationsModule,
    HttpClientModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    RadioButtonModule,
    CKEditorModule,
    AppSharedModule,
    ChartsModule,
    ngxOwlCarousel.OwlModule,
    TranslateModule.forRoot({
      loader: {
          provide: TranslateLoader,
          useFactory: HttpLoaderFactory,
          deps: [HttpClient]
      }
  })
  ],
  providers: [
    LoaderService,
    ThemeService,
    { provide: HTTP_INTERCEPTORS, useClass: JwtInterceptor, multi: true },
    { provide: HTTP_INTERCEPTORS, useClass: ErrorInterceptor, multi: true },
    { provide: HTTP_INTERCEPTORS, useClass: LoaderInterceptor, multi: true }
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

// required for AOT compilation
export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http);
}
