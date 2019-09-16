import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient, HttpEvent, HttpParams, HttpRequest} from '@angular/common/http';
import { Observable } from 'rxjs/index';
import { UserInfo } from 'src/app/interfaces/userInfo';


@Injectable({
  providedIn: 'root'
})
export class ProfileService   extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }

  public getUserInfo( params: any = {}): Observable<any> {
    return this.get(this.http, this.GET_USER_INFO, params);
 }

 public userInfoUpdate( params: any = {}): Observable<any> {
   return this.post(this.http, this.USER_UPDATE, params);
 }
}
