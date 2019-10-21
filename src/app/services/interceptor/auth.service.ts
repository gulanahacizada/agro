import { AppService } from './../app/app.service';
import { Response } from 'src/app/interfaces/response';
import { Observable, of } from 'rxjs';
import { Injectable } from '@angular/core';
import { delay } from 'rxjs/operators';


@Injectable({
  providedIn: 'root'
})

export class AuthService {
  // Assuming this would be cached somehow from a login call.
  public authTokenStale: string = 'stale_auth_token';
  public authTokenNew: string = 'new_auth_token';
  public currentToken: string;

  constructor(private appService: AppService) {
    this.currentToken = localStorage.getItem('jwt_c');
  }

  getAuthToken() {
    return this.currentToken;
  }

  refreshToken(): Observable<any> {
    /*
        The call that goes in here will use the existing refresh token to call
        a method on the oAuth server (usually called refreshToken) to get a new
        authorization token for the API calls.
    */

    this.appService.refresh().subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.authTokenNew = response.responseContent.access_token;
        localStorage.clear();
        localStorage.setItem('jwt_c', response.responseContent.access_token);
        window.location.reload();
      }
    });
    // console.log(this.authTokenNew)
    return of(this.authTokenNew);
    // return of(this.authTokenNew).pipe(delay(1000))

    // return Observable.create(obs => {
    //   obs.next(this.authTokenNew);
    //   console.log(this.authTokenNew)
    //   obs.complete();
    // }).delay(3000);
  }
}
