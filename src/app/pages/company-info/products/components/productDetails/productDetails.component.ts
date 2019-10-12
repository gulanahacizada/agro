import { Component, OnInit } from '@angular/core';
import { ProductsService } from 'src/app/pages/user-profile/products/services/products.service';
import { ActivatedRoute } from '@angular/router';
import { Response } from 'src/app/interfaces/response';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  // tslint:disable-next-line: component-selector
  selector: 'app-productDetails',
  templateUrl: './productDetails.component.html',
  styleUrls: ['./productDetails.component.scss']
})
export class ProductDetailsComponent implements OnInit {

  id: '';
  productResponse: any;
  selfID: any;
  proposalForm: FormGroup;
  totalPrice: any;
  sellPrice: any;
  count: any;
  myProduct: boolean;

  constructor(
    private productService: ProductsService,
    private activateRoute: ActivatedRoute,
    private fb: FormBuilder,
  ) {
    this.id = this.activateRoute.snapshot.params.id;
    this.selfID = localStorage.getItem('selfID');
   }

  ngOnInit() {
    this.getProdById();
    this.createProposalForm();
  }

  getProdById() {
    this.productService.getProdById(this.id).subscribe((response: Response) => {
      this.productResponse = response.responseContent;
      if (this.productResponse.user.id == this.selfID) {
        this.myProduct = true;
        console.log(this.selfID);
      }
    });
  }

  createProposalForm() {
    this.proposalForm = this.fb.group({
      product_id: [],
      size: [ Validators.required],
      price: [],
      sellPrice: [],
      body: ['', Validators.required],
    });
  }

  calculateTotalPrice(count, price) {
    this.totalPrice = 0;
    this.totalPrice = count * price;
    this.proposalForm.patchValue({
      price: this.totalPrice
    });
  }

  onCountChange(event) {
    this.count = event.target.value;
    if (this.count > this.productResponse.common) {
      this.proposalForm.patchValue({
        size: this.productResponse.common
      });
    }
    this.sellPrice = this.proposalForm.value.sellPrice;
    this.count = event.target.value;
    this.calculateTotalPrice(this.count, this.sellPrice);
  }


  onSellPriceChange(event) {
    this.sellPrice = event.target.value;
    this.calculateTotalPrice(this.proposalForm.value.size, event.target.value);
  }

  submit() {
    this.proposalForm.patchValue({
      product_id: this.id
    });
    if (this.proposalForm.valid) {
      this.productService.createDialog(this.proposalForm.value).subscribe( () => {
        this.proposalForm.reset();
      });
    }
  }

}
