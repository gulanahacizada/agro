import { Component, OnInit } from '@angular/core';
import { ProfileService } from '../../user-profile/profile/services/profile.service';
import { Response } from 'src/app/interfaces/response';
import { UserInfo } from 'src/app/interfaces/userInfo';
import { UrlSegmentGroup, UrlTree, Router, PRIMARY_OUTLET } from '@angular/router';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.scss']
})
export class MainComponent implements OnInit {

  id: any;
  url: any;
  primary: UrlSegmentGroup;
  tree: UrlTree;
  userInfo: UserInfo;

  constructor(
    private profileService: ProfileService,
    private router: Router
  ) {
    this.getRoutes(this.url);
   }

  ngOnInit() {
    this.getCompanyInfo();
  }

  getCompanyInfo() {
    this.profileService.getUserById(this.id).subscribe((response: Response) => {
      this.userInfo = response.responseContent;
      console.log(response.responseContent);
    });
  }

  getRoutes(url) {
    this.url = this.router.routerState.snapshot.url;
    this.tree = this.router.parseUrl(this.url);
    this.primary = this.tree.root.children[PRIMARY_OUTLET];
    this.id = (this.primary.segments[2] || {path: null}).path;
    console.log(this.id);
 }
}
