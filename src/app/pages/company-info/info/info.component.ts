import { Component, OnInit } from '@angular/core';
import { UserInfo } from 'src/app/interfaces/userInfo';
import { ProfileService } from '../../user-profile/profile/services/profile.service';
import { Response } from 'src/app/interfaces/response';
import { UrlSegmentGroup, UrlTree, Router, PRIMARY_OUTLET } from '@angular/router';

@Component({
  selector: 'app-info',
  templateUrl: './info.component.html',
  styleUrls: ['./info.component.scss']
})
export class InfoComponent implements OnInit {
  id: any;
  selfId: any;
  url: any;
  primary: UrlSegmentGroup;
  tree: UrlTree;
  userInfo: UserInfo;
  phone = [];
  email = [];
  activeLang = localStorage.getItem('lang');

  constructor(
    private profileService: ProfileService,
    private router: Router
  ) {  this.getRoutes(this.url); }

  ngOnInit() {
    this.getCompanyById();
  }

  getRoutes(url) {
    this.url = this.router.routerState.snapshot.url;
    this.tree = this.router.parseUrl(this.url);
    this.primary = this.tree.root.children[PRIMARY_OUTLET];
    this.id = (this.primary.segments[2] || {path: null}).path;
 }

  getCompanyById() {
    this.profileService.getUserById(this.id).subscribe((response: Response) => {
      this.userInfo = response.responseContent;
      this.userInfo.description = response.responseContent[`description_${this.activeLang}`];
      // this.phone = this.userInfo.contacts.filter(e => e.type == 0);
      // this.email = this.userInfo.contacts.filter(e => e.type == 1);
    });
  }



}
