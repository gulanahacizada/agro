import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Response } from 'src/app/interfaces/response';
import { ProductsService } from './services/products.service';
import { Product } from 'src/app/interfaces/product';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  productList: any[];

  constructor(
    private productService: ProductsService,
  ) { }

  ngOnInit() {
    this.getMyProduct();
  }

  getMyProduct() {
    this.productService.getMyProduct().subscribe((response: Response) => {
          this.productList = response.responseContent;
          console.log(this.productList);
    });
  }

}
