import { Component, OnInit } from '@angular/core';
import { ProfileService } from '../profile/services/profile.service';
import { UserInfo } from 'src/app/interfaces/userInfo';
import { Response } from 'src/app/interfaces/response';
import { Router, ActivatedRoute, UrlSegmentGroup, UrlTree, PRIMARY_OUTLET } from '@angular/router';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements OnInit {

  userInfo: UserInfo;


  constructor(
    private profileService: ProfileService,
    private activateRoute: ActivatedRoute,
    private router: Router
  ) { }

  ngOnInit() {
    this.getUserInfo();
  }




  getUserInfo() {
    this.profileService.getUserInfo().subscribe((response: Response) => {
      this.userInfo = response.responseContent;
    });
  }


}
