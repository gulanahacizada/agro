import { AgronomsService } from './services/agronoms.service';
import { Component, OnInit } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';

@Component({
  selector: 'app-agronoms',
  templateUrl: './agronoms.component.html',
  styleUrls: ['./agronoms.component.scss']
})
export class AgronomsComponent implements OnInit {
  agronomList: any;
  pagination = {
    per_page: 10,
    total: null,
    page: 1
  };
  constructor(
    public agronomService: AgronomsService,
    public translate: TranslateService
    ) { this.translate.setDefaultLang(localStorage.getItem('lang')); }

  ngOnInit() {
    this.getAgronoms();
  }

  getAgronoms() {
    this.agronomService.getAgronoms({ page: this.pagination.page, per_page: this.pagination.per_page }).subscribe(response => {
      if (response.responseCode == 1) {
        this.agronomList = response.responseContent.data;
        this.pagination.per_page = response.responseContent.per_page;
        this.pagination.total = response.responseContent.total;
      }
    });
  }


  paginate(e) {
    this.pagination.page = e.page + 1;
    this.pagination.per_page = e.rows;
    this.getAgronoms();
  }
}
