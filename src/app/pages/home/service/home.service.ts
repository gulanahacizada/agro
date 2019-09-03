import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient, HttpEvent, HttpParams, HttpRequest } from '@angular/common/http';
import { Observable } from 'rxjs/index';

@Injectable({
  providedIn: 'root'
})
export class HomeService extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }

  public allNews(params: any = {}): Observable<any> {
    return this.getTv(this.http, this.ALLL_NEWS, params);
  }

  // public allNews(): Observable<HttpEvent<any>> {

  //   const params = new HttpParams();

  //   const options = {
  //     params: params,
  //   };

  //   const req = new HttpRequest('GET', 'https://agrotv.az//birja', options);
  //   return this.http.request(req);
  // }


}
