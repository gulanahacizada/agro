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

  public trackByFn(index, item) {
    return index; // or item.id
  }
}
