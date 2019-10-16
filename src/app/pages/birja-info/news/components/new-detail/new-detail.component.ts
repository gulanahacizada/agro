import { Component, OnInit } from '@angular/core';
import { NewsService } from '../../services/news.service';
import { ActivatedRoute } from '@angular/router';
import { Response } from 'src/app/interfaces/response';

@Component({
  selector: 'app-new-detail',
  templateUrl: './new-detail.component.html',
  styleUrls: ['./new-detail.component.scss']
})
export class NewDetailComponent implements OnInit {

  id: '';
  newInfo: any;
  activeLang = localStorage.getItem('lang');
  title: string;
  body: string;
  description: string;

  constructor(
    public newsService: NewsService,
    private activateRoute: ActivatedRoute,
  ) {
    this.id = this.activateRoute.snapshot.params.id;
  }

  ngOnInit() {
    this.getNewById();
  }

  getNewById() {
    this.newsService.getNewById(this.id).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.newInfo = response.responseContent;
        this.title = response.responseContent[`title_${this.activeLang}`];
        this.body = response.responseContent[`body_${this.activeLang}`];
        this.description = response.responseContent[`description_${this.activeLang}`];
      }
    });
  }

}
