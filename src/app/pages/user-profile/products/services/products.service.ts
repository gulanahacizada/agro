import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient, HttpEvent, HttpParams, HttpRequest} from '@angular/common/http';
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

public getKinByCategory( params: any = {}): Observable<any> {
  return this.get(this.http, this.GET_KIND_BY_CATEGORY, params);
}


createProduct(  product: any, file: File): Observable<HttpEvent<any>> {
  const url = 'http://test.agrobirja.az/api/v1/product';
  const formData = new FormData();
  formData.append('accumulated_at', product.accumulated_at);
  formData.append('category_id', product.category_id);
  formData.append('common', product.common);
  formData.append('description_az', product.description_az);
  formData.append('expiry_time', product.expiry_time);
  formData.append('image', file);
  formData.append('kalibry_id', product.kalibry_id);
  formData.append('kind_id', product.kind_id);
  formData.append('package_id', product.package_id);
  formData.append('price', product.price);
  formData.append('quality_id', product.quality_id);
  formData.append('unit_id', product.unit_id);

  const params = new HttpParams();

  const options = {
    params: params,
    reportProgress: true,
  };

  const req = new HttpRequest('POST', url, formData, options);
  return this.http.request(req);
}



}
