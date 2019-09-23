import { Component, OnInit } from '@angular/core';
import { ProductsService } from 'src/app/pages/user-profile/products/services/products.service';
import { ActivatedRoute } from '@angular/router';
import { Response } from 'src/app/interfaces/response';

@Component({
  // tslint:disable-next-line: component-selector
  selector: 'app-productDetails',
  templateUrl: './productDetails.component.html',
  styleUrls: ['./productDetails.component.scss']
})
export class ProductDetailsComponent implements OnInit {

  id: '';
  productResponse: any;

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
    });
  }

}
