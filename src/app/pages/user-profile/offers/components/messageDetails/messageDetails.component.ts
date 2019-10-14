import { Component, OnInit } from '@angular/core';
import { OffersService } from '../../services/offers.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Response } from 'src/app/interfaces/response';

@Component({
  selector: 'app-messageDetails',
  templateUrl: './messageDetails.component.html',
  styleUrls: ['./messageDetails.component.scss']
})
export class MessageDetailsComponent implements OnInit {

  id: '';
  dialogInfo: any;

  constructor(
    private offersService: OffersService,
    private activateRoute: ActivatedRoute,
    private router: Router,
  ) {
    this.id = this.activateRoute.snapshot.params.id;
    }

  ngOnInit() {
    this.getDialogById();
  }

  getDialogById() {
    this.offersService.getDialogById(this.id).subscribe((response: Response) => {
      this.dialogInfo = response.responseContent;
      console.log(response.responseContent);
    });
  }

}
