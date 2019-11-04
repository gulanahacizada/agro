import { Component, OnInit } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';
import { HomeService } from '../../home/service/home.service';
import { Response } from 'src/app/interfaces/response';

@Component({
  selector: 'app-birja-top',
  templateUrl: './birja-top.component.html',
  styleUrls: ['./birja-top.component.scss']
})
export class BirjaTopComponent implements OnInit {

  productStat: any;
  pagination = {
    per_page: 10,
    total: null,
    page: 1
  };
  count = 0;

  constructor(
    private translate: TranslateService,
    public homeService: HomeService,
  ) {
    this.translate.setDefaultLang(localStorage.getItem('lang'));
    }

  ngOnInit() {
    this.getAStatistics();
  }


  getAStatistics() {
    this.homeService.statistics({ page: this.pagination.page, per_page: this.pagination.per_page }).subscribe((response: Response) => {
        // tslint:disable-next-line: triple-equals
        if (response.responseCode == 1) {
          this.productStat = response.responseContent.data;
          this.pagination.per_page = response.responseContent.per_page;
          this.pagination.total = response.responseContent.total;
        }
    });
  }

  paginate(e) {
    this.pagination.page = e.page + 1;
    this.pagination.per_page = e.rows;
    this.getAStatistics();
  }

}
