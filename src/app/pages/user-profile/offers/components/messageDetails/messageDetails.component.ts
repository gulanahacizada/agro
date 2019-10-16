import { Component, OnInit } from '@angular/core';
import { OffersService } from '../../services/offers.service';
import { ActivatedRoute } from '@angular/router';
import { Response } from 'src/app/interfaces/response';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-messageDetails',
  templateUrl: './messageDetails.component.html',
  styleUrls: ['./messageDetails.component.scss']
})
export class MessageDetailsComponent implements OnInit {

  id: '';
  dialogInfo: any;
  selfId = localStorage.getItem('selfID');
  sendMessage: FormGroup;
  totalPrice: number;
  sellPrice: number;
  count: number;

  constructor(
    public offersService: OffersService,
    private activateRoute: ActivatedRoute,
    private fb: FormBuilder,
  ) {
    this.id = this.activateRoute.snapshot.params.id;
  }

  ngOnInit() {
    this.getDialogById();
    this.createMessageForm();
    this.sendMessage.patchValue({
      dialog_id: this.id
    });
  }

  getDialogById() {
    this.offersService.getDialogById(this.id).subscribe((response: Response) => {
      this.dialogInfo = response.responseContent;
    });
  }

  createMessageForm() {
    this.sendMessage = this.fb.group({
      dialog_id: [, Validators.required],
      body: [],
      price: [],
      size: [],
      sellPrice: []
    });
  }

  calculateTotalPrice(count, price) {
    this.totalPrice = 0;
    this.totalPrice = count * price;
    this.sendMessage.patchValue({
      price: this.totalPrice
    });
  }

  onCountChange(event) {
    this.count = event.target.value;
    if (this.count > +this.dialogInfo.size) {
      this.sendMessage.patchValue({
        size: this.dialogInfo.size
      });
    }
    this.sellPrice = this.sendMessage.value.sellPrice;
    this.count = event.target.value;
    this.calculateTotalPrice(this.count, this.sellPrice);
  }
  onSellPriceChange(event) {
    this.sellPrice = event.target.value;
    this.calculateTotalPrice(this.sendMessage.value.size, event.target.value);
  }

  sendOffer() {
    if (this.sendMessage.valid) {
      if (this.dialogInfo.to == this.selfId) {
        this.offersService.answerToOffer(this.sendMessage.value).subscribe((response: Response) => {
            if (response.responseCode == 1) {
              $('.offers-reply-modal').removeClass('open');
              $('body').removeClass('o-hidden');
              this.getDialogById();
            }
        });
      } else if (this.dialogInfo.from == this.selfId) {
        this.offersService.sendToAnswer(this.sendMessage.value).subscribe((response: Response) => {
          if (response.responseCode == 1) {
            $('.offers-reply-modal').removeClass('open');
            $('body').removeClass('o-hidden');
            this.getDialogById();
          }
        });
      }
    }
  }

  acceptOffer() {
    this.offersService.acceptOffer(this.id).subscribe((response: Response) => {
      // this.router.navigate(['/dashboard/products']);
    });
  }

  rejectOffer() {
    this.offersService.rejectOffer( this.id).subscribe((response: Response) => {
    });
  }

}
