import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient} from '@angular/common/http';
import { Observable } from 'rxjs/index';

@Injectable({
  providedIn: 'root'
})
export class ProductsService  extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }

  public getUnits( params: any = {}): Observable<any> {
     return this.get(this.http, this.GET_ALL_UNITS, params);
  }

  public getPackege( params: any = {}): Observable<any> {
    return this.get(this.http, this.GET_ALL_PACKAGE , params);
 }

 public getQuality( params: any = {}): Observable<any> {
  return this.get(this.http, this.GET_ALL_QUALITY, params);
}

public getCategory( params: any = {}): Observable<any> {
  return this.get(this.http, this.GET_ALL_CATEGORY, params);
}

public getKalibry( params: any = {}): Observable<any> {
  return this.get(this.http, this.GET_ALL_KALIBRY, params);
}

public addProduct( params: any = {}): Observable<any> {
  return this.post(this.http, this.PRODUCT, params);
}


}
