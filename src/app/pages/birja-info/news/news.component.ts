import { NewsService } from './services/news.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-news',
  templateUrl: './news.component.html',
  styleUrls: ['./news.component.scss']
})
export class NewsComponent implements OnInit {
  newsList: any;

  pagination = {
    per_page: 10,
    total: null,
    page: 1
  };
  constructor(public newsService: NewsService) { }

  ngOnInit() {
    this.getNews();
  }

  getNews() {
    this.newsService.getNews({ page: this.pagination.page, per_page: this.pagination.per_page }).subscribe(response => {
      if (response.responseCode == 1) {
        this.newsList = response.responseContent.data;
        this.pagination.per_page = response.responseContent.per_page;
        this.pagination.total = response.responseContent.total;
      }
    });
  }


  paginate(e) {
    this.pagination.page = e.page + 1;
    this.pagination.per_page = e.rows;
    this.getNews();
  }

}
