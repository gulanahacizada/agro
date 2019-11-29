import { Component, OnInit } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { Response } from 'src/app/interfaces/response';
import { TranslateService } from '@ngx-translate/core';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.scss']
})
export class AboutComponent implements OnInit {

  about = [];

  constructor(
    public appService: AppService,
    public translate: TranslateService
  ) {this.translate.setDefaultLang(localStorage.getItem('lang')); }

  ngOnInit() {
    this.getAboutData();
  }

  getAboutData() {
    this.appService.about().subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.about = response.responseContent;
        console.log(this.about);
        
      }
    });
  }

}
