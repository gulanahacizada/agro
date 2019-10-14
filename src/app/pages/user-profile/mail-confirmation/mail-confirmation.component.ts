import { Component, OnInit } from '@angular/core';
import { MailConfirmationService } from './services/mail-confirmation.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Response } from 'src/app/interfaces/response';

@Component({
  selector: 'app-mail-confirmation',
  templateUrl: './mail-confirmation.component.html',
  styleUrls: ['./mail-confirmation.component.scss']
})
export class MailConfirmationComponent implements OnInit {

  constructor(
    private confirmService: MailConfirmationService,
    private activateRoute: ActivatedRoute,
    private router: Router,
  ) {
  }

  ngOnInit() {
    this.activateRoute.params.subscribe(params => {
      console.log(params.id);
      this.confirmService.verify({code: params.id}).subscribe((response: Response) => {
        if (response.responseCode == 1) {
          this.router.navigate(['/home']);
          // Todo: message cixar
        }
      });
  });
  }

}
