import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ContactUsService extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }

  public sendRequest( params: any = {}): Observable<any> {
    return this.post(this.http, this.SEND_REQUEST, params);
 }
}
