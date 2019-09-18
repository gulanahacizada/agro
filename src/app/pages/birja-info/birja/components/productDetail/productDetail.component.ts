import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Response } from 'src/app/interfaces/response';
import { ProductsService } from 'src/app/pages/user-profile/products/services/products.service';

@Component({
  selector: 'app-productDetail',
  templateUrl: './productDetail.component.html',
  styleUrls: ['./productDetail.component.scss']
})
export class ProductDetailComponent implements OnInit {

  productResponse: any;
  id: '';

  constructor(
    private productService: ProductsService,
    private activateRoute: ActivatedRoute,
  ) {
    this.id = this.activateRoute.snapshot.params.id;
   }

  ngOnInit() {
    this.getProdById();
  }

  getProdById() {
    this.productService.getProdById(this.id).subscribe((response: Response) => {
      this.productResponse = response.responseContent;
      console.log(this.productResponse);
    });
  }

}
