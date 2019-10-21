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
  imgURL: any;
  fileRaw: string;
  url: string;


  constructor(
    private profileService: ProfileService,
  ) { }

  ngOnInit() {
    this.getUserInfo();
  }

  getUserInfo() {
    this.profileService.getUserInfo().subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.userInfo = response.responseContent;
        this.url = ( this.userInfo.avatar) ? this.userInfo.avatar : 'assets/images/imagesProf.jpeg';
      }
    });
  }

  onFileChange(event) {
    if (event.target.files && event.target.files[0]) {
      let reader = new FileReader();
      let file = event.target.files[0];
      reader.readAsDataURL(file);
      reader.onload = () => {
        this.imgURL = reader.result;
        this.fileRaw = (<string>reader.result).split(',')[1];
        this.url = reader.result.toString();
      };

    }
  }



}
