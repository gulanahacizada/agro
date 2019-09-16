import { Component, OnInit } from '@angular/core';
import { ProfileService } from '../profile/services/profile.service';
import { UserInfo } from 'src/app/interfaces/userInfo';
import { Response } from 'src/app/interfaces/response';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements OnInit {
  
  userInfo: UserInfo;

  constructor(
    private profileService: ProfileService,
  ) { }

  ngOnInit() {
    this.getUserInfo();
  }

  getUserInfo() {
    this.profileService.getUserInfo().subscribe((response: Response) => {
      this.userInfo = response.responseContent;
      console.log(this.userInfo);
    });

  }

}
