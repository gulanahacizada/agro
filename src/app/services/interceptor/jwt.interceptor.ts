import { Injectable } from '@angular/core';
import { HttpRequest, HttpHandler, HttpEvent, HttpInterceptor } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable()
export class JwtInterceptor implements HttpInterceptor {
  constructor() { }

  intercept(request: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {
    // add authorization header with jwt token if available
    const currentUser = localStorage.getItem('acc_jwt');
    const language = localStorage.getItem('lang');
    const prod_lang = request.params.get('lang');
    const result = (prod_lang) ? prod_lang : (language) ? language : 'az';

    if (currentUser) {
      request = request.clone({
        setHeaders: {
          Authorization: `Bearer ${currentUser}`,
          'Accept-Language': result
        }
      });
    }
    return next.handle(request);
  }
}

