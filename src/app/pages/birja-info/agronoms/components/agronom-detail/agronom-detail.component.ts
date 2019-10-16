import { Component, OnInit } from '@angular/core';
import { AgronomsService } from '../../services/agronoms.service';
import { ActivatedRoute } from '@angular/router';
import { Response } from 'src/app/interfaces/response';

@Component({
  selector: 'app-agronom-detail',
  templateUrl: './agronom-detail.component.html',
  styleUrls: ['./agronom-detail.component.scss']
})
export class AgronomDetailComponent implements OnInit {

  id: '';
  agronomInfo: any;
  activeLang = localStorage.getItem('lang');
  title: string;
  body: string;
  description: string;

  constructor(
    public agronomService: AgronomsService,
    private activateRoute: ActivatedRoute,
  ) { this.id = this.activateRoute.snapshot.params.id; }

  ngOnInit() {
    this.getAgronomById();
  }

  getAgronomById() {
    this.agronomService.getAgronomById(this.id).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.agronomInfo = response.responseContent;
        this.title = response.responseContent[`title_${this.activeLang}`];
        this.body = response.responseContent[`body_${this.activeLang}`];
        this.description = response.responseContent[`description_${this.activeLang}`];
      }
    });
  }

}
