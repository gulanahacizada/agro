import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs/index';
import { prop } from 'src/environments/properties';


@Injectable({
  providedIn: 'root'
})


export class HttpsService {

  headers = new HttpHeaders().set('Content-type', 'text/plain');
  // tslint:disable-next-line: variable-name
  post_headers = new HttpHeaders().set('Content-type', 'text/plain');
  constructor() { }

  public rootUrl: string = 'https://' + prop.host;
  public tvRoot: string =  prop.tv;


  getTv(http: HttpClient, resourceUrl: string, params: any = {} ): Observable<any> {
    return http.get<Response>(this.tvRoot + '/' + resourceUrl, {
      params: params,
    });
  }


  get(http: HttpClient, resourceUrl: string, params: any = {}): Observable<any> {
    return http.get<Response>(this.rootUrl + '/' + resourceUrl, {
      params: params,
    });
  }

  post(http: HttpClient, resourceUrl: string, item: any, params: any = {}): Observable<any> {
    return http.post<Response>(this.rootUrl + '/' + resourceUrl, item, {
      params: params,
    });
  }

  put(http: HttpClient, resourceUrl: string, item: any, params: any = {}): Observable<any> {
    return http.put<Response>(this.rootUrl + '/' + resourceUrl, item, {
      params: params,
    });
  }

  delete(http: HttpClient, resourceUrl: string, params: any = {}): Observable<any> {
    return http.delete<Response>(this.rootUrl + '/' + resourceUrl, {
      params: params
    });
  }
}
