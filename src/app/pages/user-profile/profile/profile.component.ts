import { Component, OnInit } from '@angular/core';
import { ProfileService } from './services/profile.service';
import { Response } from 'src/app/interfaces/response';
import { UserInfo } from 'src/app/interfaces/userInfo';


@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.scss']
})
export class ProfileComponent implements OnInit {

  userInfo: UserInfo;
  isCompany = localStorage.getItem('isCompany');
  phone = [];
  email = [];

  constructor(
    private profileService: ProfileService
  ) { }

  ngOnInit() {
    this.getUser();
  }

  returnAdmin() {
    if (+this.isCompany == 1) {
      return true;
    } else {
      return false;
    }
  }


  getUser() {
    this.profileService.getUserInfo().subscribe((response: Response) => {
      this.userInfo = response.responseContent;
      // console.log(this.userInfo);
      this.phone = this.userInfo.contacts.filter(e => e.type == 0);
      this.email = this.userInfo.contacts.filter(e => e.type == 1);
    });
  }

}
