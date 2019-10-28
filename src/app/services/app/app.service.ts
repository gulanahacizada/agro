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
  public REFRESH = 'auth/refresh';
  public CURRENCY = 'birja';
  public METALS = 'metals';
  public ALLL_NEWS = 'birja-articles';
  public GET_ALL_UNITS = 'unit';
  public GET_ALL_PACKAGE = 'package';
  public GET_ALL_QUALITY = 'quality';
  public ABOUT = 'about';
  public GET_ALL_CATEGORY = 'category';
  public GET_ALL_KALIBRY = 'kalibry';
  public PRODUCT = 'product';
  public GET_MY_PRODUCT = 'product/myproduct';
  public UPDATE_MY_PRODUCT = 'product/update';
  public GET_PRODUCT_BY_ID = 'product';
  public GET_KIND_BY_CATEGORY = 'kinds/category';
  public GET_USER_INFO = 'auth/me';
  public USER_UPDATE = 'user/update';
  public USER_SELLERS = 'user/sellers';
  public GET_ALL_USER = 'user';
  public CREATEDIALOG = 'dialog/create';
  public VERIFY_CONTACT = 'user/contact/verify';
  public DIALOGS = 'dialog';
  public AGRONOMS = 'agronoms';
  public NEWS = 'news';
  public ANSWER_OFFER = 'dialog/answer';
  public SEND_OFFER = 'dialog/send';
  public SEND_REQUEST = 'offers';
  public STATISTIK_PRODUCTS = 'statistics/product/price/avg';
  public SALES_PRODUCTS_STATS = 'product/grouped';

  constructor(public http: HttpClient) {
    super();
  }

  public login(params: any = {}): Observable<any> {
    return this.post(this.http, this.LOGIN, params);
  }

  public logout(params: any = {}): Observable<any> {
    return this.post(this.http, this.LOGOUT, params);
  }
  public refresh(params: any = {}): Observable<any> {
    return this.post(this.http, this.REFRESH, params);
  }

  public register(params: any = {}): Observable<any> {
    return this.post(this.http, this.REGISTER, params);
  }

  public currency(params: any = {}): Observable<any> {
    return this.get(this.http, this.CURRENCY, params);
  }

  public metals(params: any = {}): Observable<any> {
    return this.get(this.http, this.METALS, params);
  }

  public sellerUsers(params: any = {}): Observable<any> {
    return this.get(this.http, this.USER_SELLERS, params);
  }

  public verify(params: any = {}): Observable<any> {
    return this.post(this.http, this.VERIFY_CONTACT, params);
  }

  public trackByFn(index, item) {
    return index; // or item.id
  }


  public getNews(params: any = {}): Observable<any> {
    return this.get(this.http, this.NEWS, params);
  }
  public getAllUsers(params: any = {}): Observable<any> {
    return this.get(this.http, this.GET_ALL_USER, params);
  }

  public about(params: any = {}): Observable<any> {
    return this.get(this.http, this.ABOUT, params);
  }

  public getProdStat(params: any = {}): Observable<any> {
    return this.get(this.http, this.STATISTIK_PRODUCTS, params);
  }

}
