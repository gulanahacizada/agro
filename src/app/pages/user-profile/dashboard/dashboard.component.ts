import { Component, OnInit } from '@angular/core';
import { ProfileService } from '../profile/services/profile.service';
import { UserInfo } from 'src/app/interfaces/userInfo';
import { Response } from 'src/app/interfaces/response';
import { DashboardService } from './services/dashboard.service';
import { TranslateService } from '@ngx-translate/core';

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
  file: any;



  constructor(
    private profileService: ProfileService,
    private dashbordService: DashboardService,
    public translate: TranslateService
  ) {this.translate.setDefaultLang(localStorage.getItem('lang')); }

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
      this.file = file;
      reader.readAsDataURL(file);
      reader.onload = () => {
        this.imgURL = reader.result;
        this.fileRaw = (<string>reader.result).split(',')[1];
        this.url = reader.result.toString();
      };
      this.addAvatar(this.file);
    }
  }

  addAvatar(file: any) {

    this.dashbordService.createUserAvatar(file).subscribe((res: any) => {
      if (res.body && res.body.responseCode == 1) {
          console.log('ok');
      }
    });
  }



}
