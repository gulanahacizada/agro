import { Injectable } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class OffersService  extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }

  public getAllDialogs(params: any = {}): Observable<any> {
    return this.get(this.http, this.DIALOGS, params);
  }

  public getDialogById(params: any = {}): Observable<any> {
    return this.get(this.http, this.DIALOGS + '/' + params);
  }
}
