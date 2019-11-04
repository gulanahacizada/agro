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

  public statistics(params: any = {}): Observable<any> {
    return this.get(this.http, this.SALES_PRODUCTS_STATS, params);
  }


  public curencyStat(params: any = {}): Observable<any> {
    return this.get(this.http, this.CURRENCY_STATISTICS, params);
  }

  public metalStat(params: any = {}): Observable<any> {
    return this.get(this.http, this.METALS_STATISTICS, params);
  }
  public productsStat(params: any = {}): Observable<any> {
    return this.get(this.http, this.PRODUCTS_STATISTICS, params);
  }

}
