import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient} from '@angular/common/http';
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



}
