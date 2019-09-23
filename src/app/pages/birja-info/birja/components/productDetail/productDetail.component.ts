import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Response } from 'src/app/interfaces/response';
import { ProductsService } from 'src/app/pages/user-profile/products/services/products.service';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { THIS_EXPR } from '@angular/compiler/src/output/output_ast';
import { allResolved } from 'q';

@Component({
  // tslint:disable-next-line: component-selector
  selector: 'app-productDetail',
  templateUrl: './productDetail.component.html',
  styleUrls: ['./productDetail.component.scss']
})
export class ProductDetailComponent implements OnInit {

  productResponse: any;
  id: '';
  selfID: any;
  proposalForm: FormGroup;
  totalPrice: any;
  sellPrice: any;
  count: any;

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
      console.log(this.productResponse);
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
