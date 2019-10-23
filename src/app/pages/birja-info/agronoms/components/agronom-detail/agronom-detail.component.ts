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
  body: any;
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
        this.body = this.htmlDecode(this.body);
        this.description = response.responseContent[`description_${this.activeLang}`];
      }
    });
  }

   htmlDecode(input: any) {
      let returnValue = [];
      const e = document.createElement('div');
      e.innerHTML = input;
      e.childNodes.forEach (elem => {
        if (elem.childNodes[0].textContent.includes('iframe')) {
          returnValue.push(elem.childNodes[0].textContent);
         //  return returnValue;
        }
        else {
          console.log(elem.childNodes[0]);
         returnValue.push(elem.childNodes[0].textContent);
        }
     });
    //  console.log(returnValue);
      return returnValue;
   }
}
