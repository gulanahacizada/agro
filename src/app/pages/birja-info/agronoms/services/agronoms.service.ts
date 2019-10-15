import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AgronomsService extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }

  public getAgronoms( params: any = {}): Observable<any> {
    return this.get(this.http, this.AGRONOMS, params);
 }

 public getAgronomById( params: any = {}): Observable<any> {
  return this.get(this.http, this.AGRONOMS + '/' + params);
}
}
