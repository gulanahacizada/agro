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
  // id: any;
  // selfId: any;
  // url: any;
  // primary: UrlSegmentGroup;
  // tree: UrlTree;
  userInfo: UserInfo;


  constructor(
    private profileService: ProfileService,
    private activateRoute: ActivatedRoute,
    private router: Router
  ) {
    // this.getRoutes(this.url);
    // this.selfId = localStorage.getItem('selfID');
  }

  ngOnInit() {
    this.getUserInfo();
  }

  // getRoutes(url) {
  //   this.url = this.router.routerState.snapshot.url;
  //   this.tree = this.router.parseUrl(this.url);
  //   this.primary = this.tree.root.children[PRIMARY_OUTLET];
  //   this.id = (this.primary.segments[2] || {path: null}).path;
  //   console.log(this.id);
  //  }


  getUserInfo() {
    this.profileService.getUserInfo().subscribe((response: Response) => {
      this.userInfo = response.responseContent;
    });
  }

  // getMembersById() {
  //   this.profileService.getUserById(this.id).subscribe((response: Response) => {
  //     this.userInfo = response.responseContent;
  //     console.log(response.responseContent);
  //   });
  // }

}
