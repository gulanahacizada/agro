import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { AppService } from 'src/app/services/app/app.service';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class BirjaService  extends AppService {

  constructor(public http: HttpClient) {
    super(http);
  }


}
