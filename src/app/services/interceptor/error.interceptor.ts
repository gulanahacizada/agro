

import { Injectable } from '@angular/core';
import { HttpRequest, HttpHandler, HttpEvent, HttpInterceptor, HttpResponse, HttpErrorResponse } from '@angular/common/http';
import { Observable, throwError, of } from 'rxjs';
import { catchError, tap } from 'rxjs/operators';
import Swal from 'sweetalert2';
import { Router } from '@angular/router';
import { AppService } from '../app/app.service';

@Injectable()
export class ErrorInterceptor implements HttpInterceptor {
  constructor(
    private appService: AppService,
    private router: Router) { }

  intercept(request: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {
    return next.handle(request).pipe(
      tap(evt => {
        if (evt instanceof HttpResponse) {
          // pass url in component like : params['navigatorUrl'] = '/hr';
          // tslint:disable-next-line: triple-equals
          if (request.body && request.body.hasOwnProperty('navigatorUrl') && (evt.body.responseCode == 1)) {
            Swal.fire({
              title: 'Əməliyyat uğurla tamamlandı!',
              text: evt.body.responseMessage,
              type: 'success',
              showCancelButton: false,
              confirmButtonText: 'Bağla',
            }).then((result) => {
              if (result.value) {
                this.router.navigate([request.body.navigatorUrl]);
              }
            });
          // tslint:disable-next-line: triple-equals
          } else if (request.body && request.body.hasOwnProperty('navigatorUrl') && (evt.body.responseCode != 1)) {
            Swal.fire({
              title: 'Əməliyyatda səhv!',
              text: evt.body.responseMessage,
              type: 'warning',
              showCancelButton: false,
              confirmButtonText: 'Bağla',
            }).then((result) => {
              if (result.value) {
                // this.router.navigate(['']);
              }
            });
          }
        }
      }),
      catchError((err: any) => {
        if (err instanceof HttpErrorResponse) {
          try {
            if ([401, 403].indexOf(err.status) !== -1) {
              // auto logout if 401 Unauthorized or 403 Forbidden response returned from api
              // this.appService.logout();
              // location.reload();
            }
            Swal.fire({
              title: 'Əməliyyatda səhv',
              text: err.message,
              type: 'warning',
              showCancelButton: false,
              confirmButtonText: 'Bağla',
            }).then((result) => {
              if (result.value) {
                // this.router.navigate(['']);
              }
            });
          } catch (e) {
            const error = err.error.message || err.statusText;
            return throwError(error);
          }
        }
        return of(err);
      }));
  }
}
