import { Injectable } from '@angular/core';
import { prop } from './../../../../../environments/properties';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient, HttpEvent, HttpParams, HttpRequest} from '@angular/common/http';
import { Observable } from 'rxjs/index';

@Injectable({
  providedIn: 'root'
})
export class DashboardService extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }

  createUserAvatar(file: File): Observable<HttpEvent<any>> {
    const url = 'http://' +  prop.host + '/user/image/update';
    const formData = new FormData();
    formData.append('image', file);
    const params = new HttpParams();
    const options = {
      params: params,
      reportProgress: true,
    };
    const req = new HttpRequest('POST', url, formData, options);
    return this.http.request(req);
  }
}
