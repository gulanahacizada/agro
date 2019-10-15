import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class NewsService extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }

  public getNews( params: any = {}): Observable<any> {
    return this.get(this.http, this.NEWS, params);
 }
 public getNewById( params: any = {}): Observable<any> {
  return this.get(this.http, this.NEWS + '/' + params);
}
}
