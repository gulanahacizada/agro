import { Injectable } from '@angular/core';
import { HttpsService } from '../https/https.service';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/index';

@Injectable({
  providedIn: 'root'
})
export class AppService extends HttpsService {

  public LOGIN = 'auth/login';
  public LOGOUT = 'auth/logout';
  public REGISTER = 'auth/singup';
  public CURRENCY = 'birja';
  public METALS = 'metals';
  public ALLL_NEWS = 'birja-articles';

  constructor(public http: HttpClient) {
    super();

  }

  public login(params: any = {}): Observable<any> {
    return this.post(this.http, this.LOGIN, params);
  }

  public logout(params: any = {}): Observable<any> {
    return this.post(this.http, this.LOGOUT, params);
  }

  public register(params: any = {}): Observable<any> {
    return this.post(this.http, this.REGISTER, params);
  }

  public currency(params: any = {}): Observable<any> {
    return this.getTv(this.http, this.CURRENCY, params);
  }

  public metals( params: any = {}): Observable<any> {
    return this.getTv(this.http, this.METALS, params);
  }



  public trackByFn(index, item) {
    return index; // or item.id
  }
}
