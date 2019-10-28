import { AppService } from './../app/app.service';
import { Injectable } from '@angular/core';
import { HttpRequest, HttpHandler, HttpEvent, HttpInterceptor, HttpResponse } from '@angular/common/http';
import { Observable, of, BehaviorSubject } from 'rxjs';
import { tap, catchError, switchMap, finalize, filter, take } from 'rxjs/operators';
import { AuthService } from './auth.service';


@Injectable()
export class JwtInterceptor implements HttpInterceptor {
  isRefreshingToken: boolean = false;
  tokenSubject: BehaviorSubject<string> = new BehaviorSubject<string>(null);
  constructor(private appService: AppService, private authService: AuthService) { }

  addToken(req: HttpRequest<any>, token: string): HttpRequest<any> {
    const language = localStorage.getItem('lang');
    const prod_lang = req.params.get('lang');
    const result = (prod_lang) ? prod_lang : (language) ? language : 'az';
    return req.clone({
      setHeaders: {
        Authorization: 'Bearer ' + token,
        'Accept-Language': result
      }
    });
  }

  intercept(request: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {
    return next.handle(this.addToken(request, localStorage.getItem('jwt_c'))).pipe(
      tap(evt => {
        if (evt instanceof HttpResponse) {
          if (evt.body && evt.body.responseCode == 11) {
            return this.handle401Error(request, next);
          }
        }
      }),
      catchError((err: any) => {
        return of(err);
      }));

  }

  handle401Error(req: HttpRequest<any>, next: HttpHandler) {
    if (!this.isRefreshingToken) {
      this.isRefreshingToken = true;
      // Reset here so that the following requests wait until the token
      // comes back from the refreshToken call.
      this.tokenSubject.next(null);
      return this.authService.refreshToken()
        .pipe(
          switchMap((newToken: string) => {
            if (newToken) {
              this.tokenSubject.next(newToken);
              return next.handle(this.addToken(req, newToken));
            }
            // If we don't get a new token, we are in trouble so logout.
            return this.appService.logout();
          }),
          catchError(err => {
            return this.appService.logout();
          }),
          finalize(() => {
            this.isRefreshingToken = false;
          })
        );

    } else {
      return this.tokenSubject
        .pipe(
          filter(token => token != null),
          take(1),
          switchMap(token => {
            return next.handle(this.addToken(req, token));
          })
        );
    }
  }

}

